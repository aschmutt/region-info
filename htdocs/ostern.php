<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./Templates');
$twig = new \Twig\Environment($loader, [

]);

echo $twig->render('ostern.twig', [
    'title' => 'Ostern',
    'description' => 'Ostern in Nirgendheim und Umgebung',
    'url' => 'http://demo.gessertshausen-info.de/ostern.php'
]);
