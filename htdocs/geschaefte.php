<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./Templates');
$twig = new \Twig\Environment($loader, [

]);

echo $twig->render('geschaefte.twig', [
    'title' => 'Geschäfte und Firmen',
    'description' => 'Informations-Seite für Geschäfte und Firmen in Gessertshausen und Umgebung',
    'url' => 'http://gessertshausen-info.de/geschaefte.php'
]);
