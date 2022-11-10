Créez une interface CharacteristicsDisplayable qui définit les méthodes nécessaires à l'affichage des caractéristiques sous forme de listes à puces.
Ainsi, la fonction displayCharacteristics ne prendra plus en paramètre un objet de type Car, mais un objet implémentant CharacteristicsDisplayable.
Effectuez ensuite les modifications nécessaires pour que nos voitures et nos pneus puissent être affichés grâce à la fonction displayCharacteristics.

<?php

require_once 'ElectricCar1.php';
require_once  'GasolineCar1.php';
require_once  'Tire2.php';
require_once  'carFunctions2.php';
$tesla = new ElectricCar(50000, 'Tesla', 560);
$renault = new GasolineCar(20000, 'Renault', 100);
$tire = new Tire(205, 55, 32);
displayCharacteristics($tesla);
displayCharacteristics($renault);
displayCharacteristics($tire);