<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./Templates');
$twig = new \Twig\Environment($loader, [

]);

echo $twig->render('gewinnen.twig', [
    'title' => 'Blühpatenschaft gewinnen',
    'description' => 'Blühpatenschaft gewinnen',
    'url' => 'https://www.gessertshausen-info.de/gewinnen.php',
    'image' => 'https://www.gessertshausen-info.de/Img/bieneblume_640.jpg'
]);
