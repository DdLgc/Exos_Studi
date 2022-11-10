Exécutez le script suivant et identifiez quelles erreurs seront déclenchées.

<?php

//  ini_set(varname:'display_errors', newvalue:'off');
// error_reporting(-1);
// Message censé caché les erreurs au client dans les config apache php.ini 


// function greetings($firstName, $lastName)
// {
//     echo sprintf('Bonjour %s %s', $firstName, $lastName);
// }
// $name = 'Ulrich';
// $age = 25;
// $defaultRole = DEFAULT_ROLE;
// echo $city;
// greetings($name);

// À ce stade, vous ne savez pas encore gérer des exceptions. Pour autant, vous devez être en mesure de sécuriser l'exécution d'un code. Masquez l'affichage des erreurs dans ce script et sécurisez l'exécution de ce code.

// $division = $_GET['nombre1']/$_GET['nombre2'];
// echo $division;

// On désactive l'affichage des erreurs
ini_set('display_errors', 'off');
// On vérifie qu'on a bien deux variables de définies
if (isset($_GET['nombre1']) && isset($_GET['nombre2'])) {
    // On vérifie qu'il s'agit de numériques
    if (is_numeric($_GET['nombre1']) && is_numeric($_GET['nombre2'])) {
        // On vérifie qu'on n'essaie pas de faire une division par zéro
        if ((int)$_GET['nombre2'] !== 0) {
            $division = $_GET['nombre1'] / $_GET['nombre2'];
            echo $division;
        } else {
            echo 'Vous ne pouvez pas diviser un nombre par zéro';
        }
    } else {
        echo 'Vous devez fournir des nombres';
    }
} else {
    echo 'Vous devez définir deux paramètres';
}