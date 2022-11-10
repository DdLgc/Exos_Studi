<?php
// Fichier carFunctions.php
require_once 'Car1.php';
function displayCharacteristics(Car $car): void
{
    echo '<ul>';
// Cette boucle va servir à prendre chaque champ du tableau que retourne la fonction getCharacteristics() et à les intégrer dans une balise <li> sous le format que l'on souhaite leur donner. Ici, "$name : $value"
    foreach ($car->getCharacteristics() as $name => $value) {
        echo '<li>'.$name.' : '.$value.'</li>';
    }
    echo '</ul>';
}
