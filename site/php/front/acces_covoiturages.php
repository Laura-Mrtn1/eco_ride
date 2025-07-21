<?php
require_once __DIR__ . '/../../vendor/autoload.php';  // Chargement Composer
require_once __DIR__ . '/../../include/twig/autoload.php';  // Chargement Twig

use MongoDB\Client;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

// Initialisation de Twig
$loader = new FilesystemLoader(__DIR__ . '/../../template/html');
$twig = new Environment($loader, [
    'cache' => __DIR__ . '/../../include/twig/cache',
    'auto_reload' => true,
]);

// Connexion à MongoDB (via nom de service Docker, ex : 'mongodb')
$client = new Client("mongodb://mongodb:27017");
$collection = $client->eco_ride->trajets;

// Récupération des paramètres GET
$depart = $_GET['depart'] ?? null;
$arrivee = $_GET['arrivee'] ?? null;
$date = $_GET['date'] ?? null;

$filtre = [];
$date_affichee = $date; // On conserve la date pour l'affichage dans le formulaire

// Filtre pour le lieu de départ (insensible à la casse)
if ($depart) {
    $filtre['lieu_depart'] = new \MongoDB\BSON\Regex('^' . preg_quote($depart) . '$', 'i');
}

// Filtre pour le lieu d'arrivée (insensible à la casse)
if ($arrivee) {
    $filtre['lieu_arrivee'] = new \MongoDB\BSON\Regex('^' . preg_quote($arrivee) . '$', 'i');
}

// Filtre sur la date, format ISO attendu (YYYY-MM-DD)
if ($date) {
    $dateObj = DateTime::createFromFormat('Y-m-d', $date);
    if ($dateObj) {
        $dateFormatMongo = $dateObj->format('Y-m-d');
        $filtre['date_depart'] = $dateFormatMongo;
    } else {
        // Date invalide => on enlève la date pour l'affichage aussi
        $date_affichee = null;
    }
}

// Optionnel : debug du filtre
// echo '<pre>'; var_dump($filtre); echo '</pre>';

// Exécution de la requête MongoDB
$trajetsCursor = $collection->find($filtre);
$trajets = iterator_to_array($trajetsCursor);

var_dump($trajets);
// Affichage via Twig
$orsApiKey = 'eyJvcmciOiI1YjNjZTM1OTc4NTExMTAwMDFjZjYyNDgiLCJpZCI6IjI4NGM3NjgwZWQ1NjRlYjc5M2MzYjg0MzU4MmI5MDA0IiwiaCI6Im11cm11cjY0In0=';

echo $twig->render('front/acces_covoiturages.html.twig', [
    'trajets' => $trajets,
    'depart' => $depart,
    'arrivee' => $arrivee,
    'date' => $date_affichee,
    'orsApiKey' => $orsApiKey
]);

