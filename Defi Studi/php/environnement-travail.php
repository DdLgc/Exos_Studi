<?php
$name = 'Anthony';$age = 25;$city = 'Paris';$favoriteFruits = ['banane', 'orange', 'kiwi'];
printHello($name);
printCongratulations();
printUserAge($age);
printUserCity($city);
printUserFavoriteFruits($favoriteFruits);
function printHello($name) {
    echo 'Bonjour' . $name . PHP_EOL;
}
function printUserCity($city)
{
    echo 'Ma ville est : ' . $city . PHP_EOL;
}
function printCongratulations()
{
    echo 'Félicitations, vous avez exécuté vos premières lignes de code en PHP sur votre environnement de travail!'. PHP_EOL;
}
function printUserAge($age)
{
    if ($age > 18) {
        echo "J'ai plus de 18 ans". PHP_EOL;
    } else {
        echo "J'ai moins de 18 ans". PHP_EOL;
    }
    return true;
}

function printUserFavoriteFruits(array $fruits)
{
    foreach ($fruits as $fruit) {
      echo"J'aime les ".$fruit.PHP_EOL;
    }
}
