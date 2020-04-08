<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./Templates');
$twig = new \Twig\Environment($loader, [

]);

echo $twig->render('kontakt.twig', [
    'title' => 'Kontakt',
    'description' => 'Informations-Seite für nirgendheim und Umgebung',
    'url' => 'http://nirgendheim-info.de'
]);
