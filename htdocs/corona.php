<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./Templates');
$twig = new \Twig\Environment($loader, [
    'debug' => true,
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());

echo $twig->render('corona.twig', [
    'title' => 'Corona',
    'description' => 'Informations-Seite für Gessertshausen und Umgebung'
]);