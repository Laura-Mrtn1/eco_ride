<?php

//Twig

require_once '../include/twig/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader( '../../template/html/front');
$twig = new \Twig\Environment($loader, [
    'cache' => '../include/twig/cache',
    'auto_reload' => true,
]);

echo $twig->render('hello.html.twig', ['nom' => 'Laura']);