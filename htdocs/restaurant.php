<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./Templates');
$twig = new \Twig\Environment($loader, [

]);

echo $twig->render('restaurant.twig', [
    'title' => 'Restaurants',
    'description' => 'Restaurants mit Abholung und Lieferservice',
    'url' => 'http://demo.gessertshausen-info.de/restaurant.php',
    'image' => 'http://demo.gessertshausen-info.de/Img/schnipo_1280.jpg'
]);
