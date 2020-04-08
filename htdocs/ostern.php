<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./Templates');
$twig = new \Twig\Environment($loader, [

]);

echo $twig->render('ostern.twig', [
    'title' => 'Ostern',
    'description' => 'Ostern in nirgendheim und Umgebung',
    'url' => 'http://nirgendheim-info.de/ostern.php'
]);
