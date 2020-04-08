<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./Templates');
$twig = new \Twig\Environment($loader, [

]);

echo $twig->render('essen.twig', [
    'title' => 'Essen und Trinken',
    'description' => 'Restaurants, Lieferdienste und regionale Produkte in nirgendheim und Umgebung',
    'url' => 'http://nirgendheim-info.de/essen.php'
]);
