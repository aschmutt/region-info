<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./Templates');
$twig = new \Twig\Environment($loader, [

]);

echo $twig->render('datenschutz.twig', [
    'title' => 'Datenschutz',
    'description' => 'Informations-Seite für Gessertshausen und Umgebung',
    'url' => 'http://gessertshausen-info.de'
]);
