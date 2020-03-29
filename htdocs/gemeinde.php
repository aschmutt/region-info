<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./Templates');
$twig = new \Twig\Environment($loader, [

]);

echo $twig->render('gemeinde.twig', [
    'title' => 'Gemeinde und Einrichtungen',
    'description' => 'Informations-Seite für Gessertshausen und Umgebung',
    'url' => 'http://gessertshausen-info.de/gemeinde.php'
]);
