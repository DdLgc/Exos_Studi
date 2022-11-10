<?php

// Fichier carFunctions.php
require_once 'CharacteristicsDisplayable2.php';
function displayCharacteristics(CharacteristicsDisplayable2 $characteristicsDisplayable2): void
{
    echo '<ul>';
 // Cette boucle va venir chercher TOUS les champs trouvable avec la fonction getCharacteristics() qui se situe dans le fichier characteristicsDisplayable (pour rappel, nous avons utiliser la fonction aussi bien dans le fichier Car que dans le fichier Tire) et les afficher sous le forme que nous souhaitons lui donner, ici, une liste à puce qui regroupe donc le nom du champ ainsi que la valeur de celui-ci.
    foreach ($characteristicsDisplayable2->getCharacteristics() as $name => $value) {
        echo '<li>'.$name.' : '.$value.'</li>';
    }
    echo '</ul>';
}