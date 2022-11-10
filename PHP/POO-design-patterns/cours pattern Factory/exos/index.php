<?php 
require_once 'Cat.php';
require_once 'Dog.php';
require_once 'Horse.php';
require_once 'AnimalFactory.php';
require_once 'AnimalInterface.php';

$animalTypes = ['horse', 'dog', 'mice', 'cat', 'lion'];


foreach ($animalTypes as $animalType) {
    try {
        $animal = AnimalFactory::load($animalType);
        echo sprintf("%s : %s <br/>", $animalType, $animal->getSoundType());
    } catch (Exception $e) {
        echo sprintf("%s : cet animal n'a pas été implémenté dans le système <br/>", $animalType);
    }
}

foreach($animalTypes as $animalType){
    try{
        echo AnimalFactory::load($animalType)->getSoundType() . "<br>";
    } catch (Exception $e){
    echo "l'animal n'a pas encore été implémenté <br>";
    }
}

foreach($animalTypes as $animalType){
    if(AnimalFactory::load($animalType) !== null){
        echo AnimalFactory::load($animalType)->getSoundType() . "<br>";
    } else {
        echo "l'animal n'a pas encore été implémenté <br>";
    }
    
}