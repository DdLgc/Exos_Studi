<!-- Vous disposez des variables suivantes : -->

<?php
$var1 = 'foo';
$var2 = [];
$var3 = 0;
// Utilisez la fonction empty et affichez le résultat pour ces variables.

// Solution
$var1 = 'foo';
$var2 = [];
$var3 = 0;
echo 'var 1 : ';
var_dump (empty($var1)) . PHP_EOL;
echo 'var 2 : ';
var_dump (empty($var2)). PHP_EOL;
echo 'var 3 : ';
var_dump (empty($var3)). PHP_EOL;

// ------------------------------cours--------------

// Contrôler l'intégrité d'une variable
// Il est courant de devoir contrôler l'intégrité d'une variable. Est-elle déclarée ? Correspond-elle au type attendu ?
// De nombreuses fonctions permettent d'effectuer ces contrôles simplement. Ces fonctions peuvent être retrouvées ici.
// Vérifier la déclaration d'une variable
// La fonction isset permet de vérifier qu'une variable a bien été déclarée et qu'elle n'est pas nulle.

$name = 'Hugo';
// Affichera true
echo isset($name);
// Affichera false
echo isset($city);

// Détruire une variable
// La fonction unset permet de détruire une variable.

$name = 'Nathalie';
// Affichera true
echo isset($name);
// Destruction de la variable
unset($name);
// Affichera désormais false
echo isset($name);

// Vérifier si une variable est vide
// Il est possible de déterminer simplement si une variable est vide grâce à la fonction empty.

// Les valeurs ci-dessous sont considérées comme étant vides :

"" (une chaîne vide)
0 (0 en tant qu'entier')
0.0 (0 en tant que nombre à virgule flottante)
"0" (0 en tant que chaîne de caractères)
NULL
FALSE
array() (un tableau vide)

$array = [];
// Affichera "true"
var_dump(empty($array));

// Vérifier le type d'une variable
// Il est parfois nécessaire de vérifier le type d'une variable.

// On peut par exemple vérifier qu'une variable est bien un tableau avec la fonction is_array, ou qu'il s'agit bien d'un entier avec la fonction is_int.
// Ces fonctions retournent généralement un booléen.

$anArray = [1, 2 ,3];
$anInteger = 4;
// Affichera true
echo is_array($anArray);
// Affichera false
echo is_array($anInteger );
// Affichera false
echo is_int($anArray);
// Affichera true
echo is_int($anInteger );

// Méthode
// Manipuler des chaînes de caractères
// Ce type de fonctions permet de manipuler des chaînes de caractères selon différents cas d'utilisation. Il est courant d'avoir à déterminer la longueur d'une chaîne de caractères ou de devoir forcer la casse d'une chaîne de caractères.

Ces fonctions peuvent être retrouvées dans leur intégralité ici.
Modifier la casse d'une' chaîne de caractères
Il est possible d'intervenir' facilement sur la casse d'une' chaîne de caractères. On peut par exemple transformer tous les caractères d'une' chaîne en minuscules ou en majuscules.
Ces deux constantes du langage PHP sont méconnues et on se demande parfois à quoi elles peuvent servir.
PHP_OS renvoie le nom du système d'exploitation' sur lequel l'exécutable' PHP a été compilé. On a donc généralement WINNT sur une plateforme Windows, Linux ou FreeBSD sur des systèmes Unix par exemple. C'est' donc utile pour modifier le comportement d'un' programme en fonction du système d'exploitation' où il fonctionne.
PHP est très portable, donc le cas se présente rarement, mais ça peut être utile parfois (voir l'exemple' ci-dessous).
PHP_EOL renvoie une chaine correspondant au saut de ligne sur la plateforme (LF, \n ou #10 sur Unix, CRLF, \n\r ou #13#10 sur Windows).

Dans l'exemple' ci-dessous, on suppose que l'on' est dans un script CLI (qui s'exécute' sur la ligne de commande), et on veut afficher dans la console DOS ou le terminal UNIX un tableau de lignes contenant du texte encodé en UTF-8.
La constante PHP_EOL permet de rendre plus lisible le code source. Elle renvoie un saut de ligne correspondant au système d'exploitation' actuel.

$var = 'Une ChaIne dE caractERes';
// Affichera "une chaine de caracteres"
echo strtolower($var) . PHP_EOL;
// Affichera "UNE CHAINE DE CARACTERES"
echo strtoupper($var) . PHP_EOL;

// Déterminer la longueur d'une chaîne de caractères
// Il est possible de déterminer simplement la longueur d'une chaîne de caractères avec la fonction strlen.

$var = 'Une ChaIne dE caractERes';
// Affichera "23"
echo strlen($var) . PHP_EOL;

Méthode
Travailler avec les dates et les tableaux
Au quotidien, il n'est' pas rare de devoir manipuler des dates ou des tableaux.

Récupérer la date du jour
Grâce à la fonction date, il est possible de récupérer et de formater une date.

// Affiche la date au format jour/mois/année
echo date("d/m/Y") . PHP_EOL;
// Affiche le jour de la semaine
echo date("l") . PHP_EOL;
// Affiche l'heure
echo date("H:i:s") . PHP_EOL;
Convertir une chaîne de caractères en un tableau (et inversement)
Les fonctions explode et implode permettent de transformer une chaîne de caractères en un tableau, ou un tableau en une chaîne de caractères.

$array = ['mandarine', 'fraise', 'poire', 'pamplemousse'];
// Nous allons concaténer les valeurs de notre tableau en les séparant par une virgule
$arrayToString = implode(',', $array);
// Affichera "mandarine,fraise,poire,pamplemousseArray"
echo $arrayToString;
// On transforme une chaîne en tableau en considérant que les entrées seront les éléments séparés par une virgule
$stringToArray = explode(',', $arrayToString);
print_r($stringToArray);
/* Affichera 
Array
(
    [0] => mandarine
    [1] => fraise
    [2] => poire
    [3] => pamplemousse
)
*/