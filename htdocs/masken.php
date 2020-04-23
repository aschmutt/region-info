<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./Templates');
$twig = new \Twig\Environment($loader, [

]);

echo $twig->render('masken.twig', [
    'title' => 'Selbstgenähte Masken',
    'description' => 'Wir haben eine Nähgruppe für Masken und verteilen diese dann beim Rathaus',
    'url' => 'https://www.gessertshausen-info.de/masken.php',
    'image' => 'https://www.gessertshausen-info.de/Img/mundschutz.JPG'
]);
