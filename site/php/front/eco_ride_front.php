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
}

// Affichage de la page si autorisée
if (in_array($page, $pages_front)) {
    $orsApiKey = 'eyJvcmciOiI1YjNjZTM1OTc4NTExMTAwMDFjZjYyNDgiLCJpZCI6IjI4NGM3NjgwZWQ1NjRlYjc5M2MzYjg0MzU4MmI5MDA0IiwiaCI6Im11cm11cjY0In0=';

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
