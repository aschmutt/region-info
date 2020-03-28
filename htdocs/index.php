<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./Templates');
$twig = new \Twig\Environment($loader, [
    'debug' => true,
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());

echo $twig->render('index.twig', [
    'title' => 'Startseite',
    'description' => 'Informations-Seite für Gessertshausen und Umgebung'
]);
