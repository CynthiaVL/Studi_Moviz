<?php

require_once "Vehicule.php";
require_once "Voiture.php";
require_once "Moto.php";
require_once "Bateau.php";

$voiture = new Voiture();
$voiture->setMarque('Opel');
$voiture->setVitesseMax(180);
$voiture->setNbRoue(4);
var_dump($voiture);

$moto = new Moto();
$moto->setMarque('Yamaha');
$moto->setVitesseMax(240);
$moto->setNbRoue(2);
var_dump($moto);

$bateau = new Bateau();
$bateau->setMarque('Surf');
$bateau->setVitesseMax(250);
$bateau->setNbCabine(200);
var_dump($bateau);