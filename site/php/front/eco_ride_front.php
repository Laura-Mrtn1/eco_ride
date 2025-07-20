<?php
session_start();

require_once '../../vendor/autoload.php';  // Composer autoload (MongoDB, etc.)
require_once '../include/twig/autoload.php'; // Twig autoload

use MongoDB\Client;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

// Initialisation Twig
$loader = new FilesystemLoader('../../template/html');
$twig = new Environment($loader, [
    'cache' => '../include/twig/cache',
    'auto_reload' => true,
]);

$twig->addGlobal('session', $_SESSION);

// Connexion MongoDB
$client = new Client("mongodb://mongodb:27017");
$collection = $client->eco_ride->trajets;

// Pages autorisées
$pages_front = [
    'front/accueil',
    'front/acces_covoiturages',
    'front/contact',
    'front/connexion',
    'front/details_covoiturages',
    'front/inscription',
    'front/mentions_legales'
];

$page = $_GET['page'] ?? 'front/accueil';

// Par défaut aucune donnée trajets
$trajets = [];
$depart = $_GET['depart'] ?? '';
$arrivee = $_GET['arrivee'] ?? '';
$date = $_GET['date'] ?? '';

// Traitement spécial pour la page accès covoiturages
if ($page === 'front/acces_covoiturages') {

    $filtre = [];

    if ($depart !== '') {
        $filtre['lieu_depart'] = new MongoDB\BSON\Regex(preg_quote($depart), 'i');  // Recherche insensible à la casse
    }
    if ($arrivee !== '') {
        $filtre['lieu_arrivee'] = new MongoDB\BSON\Regex(preg_quote($arrivee), 'i');
    }
    if ($date !== '') {
        // Vérification simple du format date YYYY-MM-DD
        if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
            $filtre['date_depart'] = $date;
        } else {
            $date = ''; // reset si format invalide
        }
    }

    // Requête MongoDB
    $cursor = $collection->find($filtre);
    foreach ($cursor as $document) {
        $trajets[] = $document;
    }

    // Fallback si pas de trajets trouvés
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
        ];
    }
}

if (in_array($page, $pages_front)) {
    $orsApiKey = 'eyJvcmciOiI1YjNjZTM1OTc4NTExMTAwMDFjZjYyNDgiLCJpZCI6IjI4NGM3NjgwZWQ1NjRlYjc5M2MzYjg0MzU4MmI5MDA0IiwiaCI6Im11cm11cjY0In0=';

    echo $twig->render("$page.html.twig", [
        'depart' => $depart,
        'arrivee' => $arrivee,
        'date' => $date,
        'trajets' => $trajets,
        'orsApiKey' => $orsApiKey,
    ]);
} else {
    // Page non autorisée, affichage accueil
    echo $twig->render("front/accueil.html.twig");
}
