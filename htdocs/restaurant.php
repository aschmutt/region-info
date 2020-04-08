<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./Templates');
$twig = new \Twig\Environment($loader, [

]);

echo $twig->render('restaurant.twig', [
    'title' => 'Restaurants',
    'description' => 'Restaurants mit Abholung und Lieferservice',
    'url' => 'http://nirgendheim-info.de/restaurant.php',
    'image' => 'http://nirgendheim-info.de/Img/restaurant.png'
]);
