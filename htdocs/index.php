<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./Templates');
$twig = new \Twig\Environment($loader, [
    'debug' => true,
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());

echo $twig->render('index.twig', [
    'title' => 'Gessertshausen Info',
    'description' => 'Informations-Seite für Gessertshausen und Umgebung',
    'url' => 'http://gessertshausen-info.de'
]);
