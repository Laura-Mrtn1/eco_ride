<?php

// Initialisation de la session admin si non d�finie
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

// Connexion � MongoDB
require_once '../../vendor/autoload.php'; // Chemin vers le vendor/autoload g�n�r� par Composer

use MongoDB\Client;

$client = new Client("mongodb://mongodb:27017");
$collection = $client->eco_ride->trajets;

// Liste des pages front autoris�es
$pages_front = [
    'front/accueil',
    'front/acces_covoiturages',
    'front/contact',
    'front/connexion',
    'front/details_covoiturages',
    'front/inscription',
    'front/mentions_legales'
];

// Page demand�e (ou accueil par d�faut)
$page = $_GET['page'] ?? 'front/accueil';

// Simulation d'une inscription r�ussie (� adapter plus tard avec base de donn�es)
if ($page === 'front/inscription' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['is_admin'] = true;
    header('Location: ../admin/eco_ride_admin.php?page=admin/profil');
    exit;
}

// Exemple : r�cup�ration des trajets depuis Mongo si on est sur la page des covoiturages
$trajets = [];
if ($page === 'front/acces_covoiturages') {
    $depart = $_GET['depart'] ?? '';
    $arrivee = $_GET['arrivee'] ?? '';
    $date = $_GET['date'] ?? '';

    $filtre = [];
    if ($depart) $filtre['lieu_depart'] = $depart;
    if ($arrivee) $filtre['lieu_arrivee'] = $arrivee;
    if ($date) $filtre['date_depart'] = $date;

    $cursor = $collection->find($filtre);
    foreach ($cursor as $document) {
        $trajets[] = $document;
    }
}

// Affichage de la page si autoris�e
if (in_array($page, $pages_front)) {
    echo $twig->render("$page.html.twig", [
        'depart' => $_GET['depart'] ?? '',
        'arrivee' => $_GET['arrivee'] ?? '',
        'date' => $_GET['date'] ?? '',
        'trajets' => $trajets // ? Utilisable dans ton template Twig
    ]);
} else {
    echo $twig->render("front/accueil.html.twig");
}
