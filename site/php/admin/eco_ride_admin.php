<?php
session_start();

// Accès interdit si non admin
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
    header('Location: ../front/eco_ride_front.php?page=front/connexion');
    exit;
}

// Chargement de Twig
require_once '../include/twig/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('../../template/html');
$twig = new \Twig\Environment($loader, [
    'cache' => '../include/twig/cache',
    'auto_reload' => true,
]);

$twig->addGlobal('session', $_SESSION);

// Liste des pages admin autorisées
$pages_admin = [
    'admin/profil',
    'admin/espace_utilisateurs',
    'admin/publier_trajet',
    'admin/trajet_programme'
];

// Page demandée (ou profil admin par défaut)
$page = $_GET['page'] ?? 'admin/profil';

// Déconnexion
if ($page === 'admin/deconnexion') {
    session_unset();
    session_destroy();
    header('Location: ../front/eco_ride_front.php?page=front/accueil');
    exit;
}

// Affichage de la page si autorisée
if (in_array($page, $pages_admin)) {
    echo $twig->render("$page.html.twig");
} else {
    echo $twig->render("admin/profil.html.twig");
}
