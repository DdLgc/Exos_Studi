<?php

function printDateTimee()
{
  echo date("Y-m-d H:i:s");
}
printDateTimee();


// -------------------les parametres ----------------

function greetingss()
{
  echo "Bonjour, je m'appelle Jules" . PHP_EOL;
  echo "J'ai 27 ans" . PHP_EOL;
}
greetingss();

// Modifiez la fonction suivante afin de rendre le nom de l'utilisateur et son âge paramétrables.
// Le nom est une chaîne de caractères obligatoire, tandis que l'âge est un entier qui ne sera pas obligatoire.

function greetings(string $name, int $age = null)
{
  echo sprintf("Bonjour, je m'appelle %s", $name) . PHP_EOL;
  
  if (!empty($age)) {
    echo sprintf("J'ai %s ans ", $age) . PHP_EOL;
  }
}
greetings('Jules', 27);
greetings('Sophia');

// -------------------les valeurs de retour ----------------

function printDateTime()
{
  echo date('d/m/Y h:i');
}
printDateTime();

// La fonction suivante affiche la date du jour et l'heure courante au format européen. Modifiez-la pour qu'elle retourne cette date plutôt qu'elle ne l'affiche. Renommez-la également en conséquence : getDateTime.

function getDateTime(): string
{
  return date('d/m/Y h:i');
}
$currentDate = getDateTime();
echo $currentDate;

// -------------------les variables statiques ----------------

// Les variables statiques sont adaptées à la mise en place d'un compteur. Modifiez cette fonction afin que $start ne soit plus un paramètre, mais une variable statique qui continuera à être incrémentée automatiquement jusqu'à 20 lors de l’exécution de la fonction.
function increaseToTwenty() {
  static $start= 10;
  
  echo $start . PHP_EOL;    
  if ($start < 20) {
    $start = $start +2;
    increaseToTwenty();
  }
}
increaseToTwenty();


// -------------------les fonctions anonymes/ callbacks ----------------

// À retenir----------
// Une fonction anonyme est une fonction sans nom qui peut être stockée dans une variable.---------
// Elle est utilisée lorsque des fonctions prennent en paramètre une autre fonction.--------

// Déclarez un tableau contenant des nombres entiers de 1 à 27, de trois en trois.À l'aide de la fonction array_map, ajoutez 7 à chacun des éléments du tableau. Le chiffre que vous ajoutez à chacun des éléments devra être paramétrable.

$numberToAdd = 7;
$add = function ($n) use ($numberToAdd)
{
  return ($n + $numberToAdd);
};

$array = range(1,27,3);
print_r(array_map($add, $array));


// -------------------les fonctions recursives ----------------

// À retenir
// Une fonction récursive est une fonction qui s'appelle elle-même. C'est une autre manière de faire des boucles-----------

// Déclarez et faites appel à une fonction récursive qui, pour un chiffre donné, l'incrémentera de deux tant qu'il ne sera pas supérieur à 20.

function increaseToTwentyy($start) {
  echo $start .PHP_EOL;

  if ($start < 20) {
    $start = $start +2;
    increaseToTwentyy($start);
  }
}

increaseToTwentyy(10);