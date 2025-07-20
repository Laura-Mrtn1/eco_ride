const ORS_API_KEY = window.ORS_API_KEY;


//Fonction pour récupérer les paramètres dans l'URL
function getParametreURL(nom) {
    const params = new URLSearchParams(window.location.search);
    return params.get(nom);
}

const covoiturages = trajetsData || [];



// Fonction pour générer les étoiles
function genererEtoiles(note) {
    const fullStars = Math.floor(note);
    const emptyStars = 5 - fullStars;
    let html = "";

    for (let i = 0; i < fullStars; i++) {
        html += `<span class="fa-solid fa-star fa-lg"></span>`;
    }
    for (let i = 0; i < emptyStars; i++) {
        html += `<span class="fa-regular fa-star fa-lg"></span>`;
    }

    return html;
}

function formaterDateFrancais(dateISO) {
    const [annee, mois, jour] = dateISO.split("-");
    return `${jour}/${mois}/${annee}`;
}

// Fonction pour afficher les résultats dans le div #resultats
async function afficherResultats(resultats) {
    const container = document.getElementById("resultats");
    container.innerHTML = "";

    if (resultats.length === 0) {
        container.innerHTML = "<p>Aucun trajet disponible pour cet itinéraire.</p>";
        return;
    }

    // Préparer un tableau de promesses pour récupérer tous les itinéraires en parallèle
    const promises = resultats.map(trajet =>
        getItineraireOpenRouteService(trajet.lieu_depart, trajet.lieu_arrivee)
            .then(infosItineraire => ({ trajet, infosItineraire }))
            .catch(() => ({ trajet, infosItineraire: null }))
    );

    // Attendre que toutes les promesses soient résolues
    const trajetsAvecInfos = await Promise.all(promises);

    // Construire le HTML pour chaque trajet
    for (const { trajet, infosItineraire } of trajetsAvecInfos) {
        const html = `
        <div class="fond_offre_covoiturages">
            <div class="row">
                <div class="col-md-6">
                    <p id="date_container">${formaterDateFrancais(trajet.date_depart)}</p>
                </div>
                <div class="col-md-6">
                    <p class="text-right" id="prix_element">${parseFloat(trajet.prix_personne).toFixed(2)}€</p>
                </div>
            </div>
            <div class="row duree_covoiturages">
                <div class="col-md-1">
                    <p id="heure_depart">${trajet.heure_depart}</p>
                </div>
                <div class="col-md-4 duree_trajet">
                    <span class="trajet_circle fa-regular fa-circle"></span>
                    <hr class="longueur_trajet">
                    <span class="trajet_circle fa-regular fa-circle"></span>
                </div>
                <div class="col-md-7">
                    <p id="heure_arrivee">${trajet.heure_arrivee}</p>
                    ${infosItineraire ? `<small>${infosItineraire.distance_km} km – ${infosItineraire.duree_min} min</small>` : ""}
                </div>
            </div>
            <hr class="separation_offre_covoiturages">
            <div class="row offre_covoiturages">
                <div class="col-md-1">
                    <img src="/images/front/voiture.png">
                </div>
                <div class="col-md-1">
                    <img src="${trajet.utilisateur_photo}" width="40">
                </div>
                <div class="col-md-2">
                    <p>${trajet.utilisateur_pseudo}</p>
                </div>
                <div class="col-md-3">
                    ${genererEtoiles(trajet.note_moyenne || 0)}
                </div>
                <div class="col-md-3">
                    <p>${trajet.nb_place} place${trajet.nb_place > 1 ? 's' : ''} disponible${trajet.nb_place > 1 ? 's' : ''}</p>
                </div>
                <div class="col-md-2 bouton_details">
                    <a href="?page=front/details_covoiturages&id=${trajet._id}" class="bouton_ecoride">DÉTAILS</a>
                </div>
            </div>
        </div>
        `;

        container.innerHTML += html;
    }
}





//Code exécuté au chargement de la page acces_covoiturages
window.addEventListener("DOMContentLoaded", async () => {
    if (covoiturages.length > 0) {
        await afficherResultats(covoiturages);
    } else {
        document.getElementById("resultats").innerHTML = "<p>Aucun trajet disponible pour cette recherche.</p>";
    }
});

// Fonction pour géocoder une ville avec ORS
async function geocoderVille(ville) {
    const geocodeUrl = `https://api.openrouteservice.org/geocode/search?api_key=${ORS_API_KEY}&text=${encodeURIComponent(ville)}&size=1`;

    const response = await fetch(geocodeUrl);
    if (!response.ok) throw new Error(`Erreur géocodage: ${response.status}`);

    const data = await response.json();

    if (data.features && data.features.length > 0) {
        const [lon, lat] = data.features[0].geometry.coordinates;
        return [lon, lat]; // longitude, latitude
    } else {
        throw new Error(`Ville non trouvée : ${ville}`);
    }
}

// Fonction pour appeler OpenRouteService entre deux villes
async function getItineraireOpenRouteService(depart, arrivee) {
    const url = `https://api.openrouteservice.org/v2/directions/driving-car`;

    try {
        // Étape 1 : géocoder les adresses pour obtenir les coordonnées
        const [coordDepart, coordArrivee] = await Promise.all([
            geocoderVille(depart),
            geocoderVille(arrivee)
        ]);

        // Étape 2 : requête vers OpenRouteService
        const response = await fetch(url, {
            method: "POST",
            headers: {
                "Authorization": ORS_API_KEY,
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                coordinates: [coordDepart, coordArrivee]
            })
        });

        if (!response.ok) throw new Error(`Erreur directions: ${response.status}`);

        const data = await response.json();

        // Renvoyer distance + durée
        const segment = data.features[0].properties.segments[0];
        return {
            distance_km: (segment.distance / 1000).toFixed(1),
            duree_min: Math.round(segment.duration / 60)
        };
    } catch (err) {
        console.error("Erreur OpenRouteService :", err);
        return null;
    }
}

