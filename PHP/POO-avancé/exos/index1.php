<?php
// Fichier index.php
require_once 'ElectricCar1.php';
require_once  'GasolineCar1.php';
require_once  'carFunctions1.php';
$tesla = new ElectricCar(50000, 'Tesla', 560);
$renault = new GasolineCar(20000, 'Renault', 100);
displayCharacteristics($tesla);
displayCharacteristics($renault);