<?php

session_start();

if (!isset($_SESSION['is_admin'])) {
    $_SESSION['is_admin'] = false;
}

require_once '../include/twig/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../../template/html');

$twig = new \Twig\Environment($loader, [
    'cache' => '../include/twig/cache',
    'auto_reload' => true,
]);

$twig->addGlobal('session', $_SESSION);

$page = $_GET['page'] ?? 'front/accueil'; // page par défaut


if ($page === 'admin/deconnexion') {
    session_unset();        // Vide les variables de session
    session_destroy();      // Détruit la session
    header('Location: ?page=front/accueil'); // Redirige vers l'accueil
    exit;
}

$pages_front = ['front/accueil', 'front/acces_covoiturages', 'front/contact', 'front/connexion', 'front/details_covoiturages', 'front/inscription'];
$pages_admin = ['admin/profil', 'admin/espace_utilisateurs', 'admin/publier_trajet', 'admin/trajet_programme'];

// Simulation d'une inscription réussie
if ($page === 'front/inscription' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['is_admin'] = true;
    header('Location: ?page=admin/profil');
    exit;
}

if (in_array($page, $pages_front)) {
    echo $twig->render("$page.html.twig");
} elseif (in_array($page, $pages_admin)) {
    if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
        header('Location: ?page=admin/profil');
        exit;
    } else {
        echo $twig->render("$page.html.twig");
    }
} else {
    echo $twig->render("front/accueil.html.twig");
}
