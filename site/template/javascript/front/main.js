//Fonction pour récupérer les paramètres dans l'URL
function getParametreURL(nom) {
    const params = new URLSearchParams(window.location.search);
    return params.get(nom);
}

const covoiturages = trajetsData || [];



//Fonction pour générer les étoiles
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

//Fonction pour afficher les résultats dans le div #resultats
function afficherResultats(resultats, dateRecherchee) {
    const container = document.getElementById("resultats");
    container.innerHTML = "";

    if (resultats.length === 0) {
        container.innerHTML = "<p>Aucun trajet disponible pour cet itinéraire.</p>";
        return;
    }

    resultats.forEach(trajet => {
        const html = `
        <div class="fond_offre_covoiturages">
            <div class="row">
                <div class="col-md-6">
                    <p id="date_container">${formaterDateFrancais(trajet.covoiturage_date_depart)}</p>
                </div>
                <div class="col-md-6">
                    <p class="text-right" id="prix_element">${parseFloat(trajet.covoiturage_prix_personne).toFixed(2)}€</p>
                </div>
            </div>
            <div class="row duree_covoiturages">
                <div class="col-md-1">
                    <p id="heure_depart">${trajet.covoiturage_heure_depart}</p>
                </div>
                <div class="col-md-4 duree_trajet">
                    <span class="trajet_circle fa-regular fa-circle"></span>
                    <hr class="longueur_trajet">
                    <span class="trajet_circle fa-regular fa-circle"></span>
                </div>
                <div class="col-md-7">
                    <p id="heure_arrivee">${trajet.covoiturage_heure_arrivee}</p>
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
                    <p>${trajet.covoiturage_nb_place} place${trajet.covoiturage_nb_place > 1 ? 's' : ''} disponible${trajet.covoiturage_nb_place > 1 ? 's' : ''}</p>
                </div>
                <div class="col-md-2 bouton_details">
                    <a href="?page=front/details_covoiturages&id=${trajet.covoiturage_id}" class="bouton_ecoride">DÉTAILS</a>
                </div>
            </div>
        </div>
        `;
        container.innerHTML += html;
    });
}


//Code exécuté au chargement de la page acces_covoiturages
window.addEventListener("DOMContentLoaded", () => {
    if (covoiturages.length > 0) {
        afficherResultats(covoiturages);
    } else {
        document.getElementById("resultats").innerHTML = "<p>Aucun trajet disponible pour cette recherche.</p>";
    }
});


