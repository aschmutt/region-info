<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./Templates');
$twig = new \Twig\Environment($loader, [
    'debug' => true,
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());

echo $twig->render('index.twig', [
    'title' => 'Aktuelles aus Nirgendheim und Umgebung',
    'description' => 'Informationen zu Geschäfts-Öffnungszeiten, Hilfsangebote wg. Corona und mehr',
    'url' => 'http://demo.gessertshausen-info.de'
]);
