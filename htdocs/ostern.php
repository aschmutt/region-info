<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./Templates');
$twig = new \Twig\Environment($loader, [

]);

echo $twig->render('ostern.twig', [
    'title' => 'Ostern',
    'description' => 'Ostern in Gessertshausen und Umgebung',
    'url' => 'https://www.gessertshausen-info.de/ostern.php',
    'image' => 'https://www.gessertshausen-info.de/Img/osterkorb_640.jpg'
]);
