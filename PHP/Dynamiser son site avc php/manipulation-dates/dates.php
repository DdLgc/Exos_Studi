<?php
$timestamps = [1654863436, 1407673368, 1581337036, 1644495436, 1399724236, 1586521368, 1628598168];
$comparisonTimestamp = 1586521036;
$comparisonFunction = function ($timestamp) use ($comparisonTimestamp) {
    return $timestamp <= $comparisonTimestamp;
};
print_r(array_filter($timestamps, $comparisonFunction)).PHP_EOL;

echo microtime(true). PHP_EOL;

$heure = 12;
$minutes=56;
$secondes=0;
$mois =3;
$jour=3;
$année = 2023;

$timestamp = mktime($heure,$minutes,$secondes,$mois,$jour,$année) . PHP_EOL;

echo date('d/m/Y H:i:s',$timestamp) . PHP_EOL;

echo time() . PHP_EOL;

// Affichez les trois timestamps Unix suivants :

// Le 21 décembre 2012 à 0 h 41 m00 s

// Aujourd'hui à minuit

// Aujourd'hui à midi

// Solution
// 1
echo mktime(0, 41, 0, 12, 21, 2012) . PHP_EOL;
// 2
echo mktime(0, 0, 0) . PHP_EOL;
// 3
echo mktime(12, 0, 0). PHP_EOL;

// En vous aidant des fonctions vues précédemment, calculez le temps d'exécution du code suivant :

$result = 1;
for ($i = 1; $i <= 10000000; $i++) {
	$result = $i * $result;
}

$start = microtime(true);
$result = 1;
for ($i = 1; $i <= 10000000; $i++) {
	$result = $i * $result;
}
echo 'Script terminé en '.(microtime(true) - $start).' secondes';



// En vous aidant de la fonction date()et de la documentation, affichez :
// Le numéro de la semaine en cours
// La date du jour à minuit au format ISO 8601
// Le jour textuel correspondant au 25 décembre de l'année prochaine


// 1
echo 'Nous sommes en semaine '.date('W')  . PHP_EOL;;

// 2
echo 'La date d\'aujourd\'hui au format ISO 8601 est : '.date('c', mktime(0, 0, 0))  . PHP_EOL;;

// 3
$nextXmas = mktime(0, 0, 0, 12, 25, date('Y') + 1);
echo 'Le 25 décembre '.date('Y', $nextXmas).' nous serons un '.date('l', $nextXmas) . PHP_EOL;;