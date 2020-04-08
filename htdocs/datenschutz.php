<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./Templates');
$twig = new \Twig\Environment($loader, [

]);

echo $twig->render('datenschutz.twig', [
    'title' => 'Datenschutz',
    'description' => 'Datenschutz Seite',
    'url' => 'http://demo.gessertshausen-info.de'
]);
