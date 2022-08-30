<?php

$a = 0;
$b = 20;
$c = 13;
for ($i = $a; $i <= $b; $i++) {
  echo $c.' x '.$i.' = '.($c * $i).'<br>';
}

// Le comportement de ce script est déterminé par les trois variables présentes au début de ce script, mais elles ont été très mal nommées.
// Exécutez ce script dans Repl.it en modifiant les valeurs de ces trois variables afin de voir comment elles influent sur la boucle.
// Déterminez la fonction de chaque variable et proposez de meilleurs noms.

// ----------------- WHILE / DOWHILE -------------------------------------------

$tries = 0;
$sticksNumber = 15;
// Contenu de la boucle
do {
  
  $removedSticks = rand(1, 3);
  $playerNumber = ($tries % 2) + 1;
  $sticksNumber -= $removedSticks;
  echo 'Joueur '.$playerNumber.' retire '.$removedSticks.' bâtons. Il en reste '.$sticksNumber.'<br>';
  $tries++;
} while ($sticksNumber > 0 );

// while methode while ($sticksNumber > 0) {
//   $removedSticks = rand(1, 3);
//   $playerNumber = ($tries % 2) + 1;
//   $sticksNumber -= $removedSticks;
//   echo 'Joueur '.$playerNumber.' retire '.$removedSticks.' bâtons. Il en reste '.$sticksNumber.'<br>';
//   $tries++;
// } ;


// ----------------- FOR -------------------------------------------

for($nombre = 1;$nombre <= 9;$nombre++) {
  for($repeter = 1;$repeter <= $nombre;$repeter++) {
    echo $nombre;
  }
  echo '<br/>';
}?>


<!-- // ----------------- FOREACH  ------------------------------------------- -->

<html>
<head></head>
<body>
<h1>Liste des ventes annuelles</h1>
<ul>
<?php
$sales = [
  'janvier' => 64,
  'fevrier' => 45,
  'mars' => 32,
  'avril' => 45,
  'mai' => 35,
  'juin' => 47,
  'juillet' => 68,
  'aout' => 76,
  'septembre' => 43,
  'octobre' => 23,
  'novembre' => 83,
  'decembre' => 15,
];
$total = 0;
$lastMonthQuantity = 0;
foreach ($sales as $month => $quantity) {
  echo '<li>'.$month.' : '.$quantity;
if ($lastMonthQuantity > $quantity){
echo '-';
} else {
echo '+';
}
echo '</li>';
  $lastMonthQuantity = $quantity;
  $total += $quantity;
}
?>
</ul>
Total : 
<?php
  echo $total;
?>
</body>
<html>