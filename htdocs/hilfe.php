<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./Templates');
$twig = new \Twig\Environment($loader, [
    'debug' => true,
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());

echo $twig->render('hilfe.twig', [
    'title' => 'Helfen',
    'description' => 'Informations-Seite für Hilfsangebote und Bürger-Initiativen in nirgendheim und Umgebung',
    'url' => 'http://nirgendheim-info.de/hilfe.php'
]);
