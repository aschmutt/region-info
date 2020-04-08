<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./Templates');
$twig = new \Twig\Environment($loader, [

]);

echo $twig->render('ueber-uns.twig', [
    'title' => 'Über diese Seite',
    'description' => 'Informations-Seite für Gessertshausen und Umgebung',
    'url' => 'https://www.gessertshausen-info.de/ueber-uns.php'
]);
