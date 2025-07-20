<?php

// Initialisation de la session admin si non définie
if (!isset($_SESSION['is_admin'])) {
    $_SESSION['is_admin'] = false;
}

// Chargement de Twig
require_once '../include/twig/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('../../template/html');
$twig = new \Twig\Environment($loader, [
    'cache' => '../include/twig/cache',
    'auto_reload' => true,
]);

$twig->addGlobal('session', $_SESSION);

// Connexion à MongoDB
require_once '../../vendor/autoload.php'; // Chemin vers le vendor/autoload généré par Composer

use MongoDB\Client;

$client = new Client("mongodb://mongodb:27017");
$collection = $client->eco_ride->trajets;

// Liste des pages front autorisées
$pages_front = [
    'front/accueil',
    'front/acces_covoiturages',
    'front/contact',
    'front/connexion',
    'front/details_covoiturages',
    'front/inscription',
    'front/mentions_legales'
];

// Page demandée (ou accueil par défaut)
$page = $_GET['page'] ?? 'front/accueil';

// Simulation d'une inscription réussie (à adapter plus tard avec base de données)
if ($page === 'front/inscription' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['is_admin'] = true;
    header('Location: ../admin/eco_ride_admin.php?page=admin/profil');
    exit;
}

// Exemple : récupération des trajets depuis Mongo si on est sur la page des covoiturages
$trajets = [];
if ($page === 'front/acces_covoiturages') {
    $depart = $_GET['depart'] ?? '';
    $arrivee = $_GET['arrivee'] ?? '';
    $date = $_GET['date'] ?? '';

    $filtre = [];

    // Recherche insensible à la casse et partielle sur lieu_depart
    if ($depart) {
        $filtre['lieu_depart'] = new MongoDB\BSON\Regex($depart, 'i');
    }

    // Recherche insensible à la casse et partielle sur lieu_arrivee
    if ($arrivee) {
        $filtre['lieu_arrivee'] = new MongoDB\BSON\Regex($arrivee, 'i');
    }

    // Filtrage strict sur la date
    if ($date) {
        $filtre['date_depart'] = $date;
    }

    $cursor = $collection->find($filtre);
    foreach ($cursor as $document) {
        $trajets[] = $document;
    }

    // Ici tu ajoutes le fallback si pas de trajets trouvés
    if (empty($trajets)) {
        $trajets = [
            [
                'lieu_depart' => 'Paris',
                'lieu_arrivee' => 'Lyon',
                'date_depart' => '2025-07-21',
                'heure_depart' => '08:00',
                'heure_arrivee' => '12:00',
                'prix_personne' => 25,
                'utilisateur_photo' => '/images/users/user1.jpg',
                'utilisateur_pseudo' => 'JeanDupont',
                'note_moyenne' => 4,
                'nb_place' => 3,
                '_id' => 'test1',
            ],
            // tu peux ajouter d’autres trajets test ici
        ];
    }
}

// Affichage de la page si autorisée
if (in_array($page, $pages_front)) {
    $orsApiKey = 'TA_CLÉ_API_ORS_ICI';

    echo $twig->render("$page.html.twig", [
        'depart' => $_GET['depart'] ?? '',
        'arrivee' => $_GET['arrivee'] ?? '',
        'date' => $_GET['date'] ?? '',
        'trajets' => $trajets,
        'orsApiKey' => $orsApiKey
    ]);

} else {
    echo $twig->render("front/accueil.html.twig");
}
