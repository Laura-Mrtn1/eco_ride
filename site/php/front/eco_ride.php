<?php

//Twig

require_once '../include/twig/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader( '../../template/html/front');
$twig = new \Twig\Environment($loader, [
    'cache' => '../include/twig/cache',
    'auto_reload' => true,
]);

// D�terminer la page � afficher
$page = $_GET['page'] ?? 'accueil'; // page par d�faut = home

// Liste des pages valides
$pages_valides = ['accueil', 'acces_covoiturages', 'contact', 'connexion'];

// V�rification de la page demand�e
if (!in_array($page, $pages_valides)) {
    $page = 'accueil'; // fallback
}

// Rendu de la page
echo $twig->render("$page.html.twig");