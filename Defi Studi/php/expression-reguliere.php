<?php

// <!-- Grâce à la fonction PHP adéquate, vérifiez que toutes ces URL sont correctes : -->

// www.google.fr
// http://www.google.fr
// https://www.google.fr
// https://www.google.fr:8080
// https://www.google.fr:8080/

// // <!-- Mais pas celles-là : -->

// localhost
// google.fr
// ://www.google.fr
// https://www.google.fr:

// La validation doit être insensible à la casse.

$urls = [
  'www.google.fr',
  'http://www.google.fr',
  'https://www.google.fr',
  'https://www.google.fr:8080',
  'https://www.google.fr:8080/',
  'localhost',
  'google.fr',
  '://www.google.fr',
  'https://www.google.fr:',
];
foreach ($urls as $url) {
  if (preg_match('/^([a-z]+:\/\/)?[a-z]*(\.[a-z]*){2}(:\d+)?\/?$/i', $url)) {
      echo "$url est au bon format.".PHP_EOL;
  } else {
      echo "$url n'est pas au bon format.".PHP_EOL;
  }
}

// La boucle parcourt l’intégralité du tableau “$urls” Le if vérifie si l’url commence par des lettres suivi de “:” ainsi que “//” mais c’est facultatif car il y a un “?” (“/^([a-z]+:\/\/)?”).

// L’url peut aussi simplement commencer avec des lettres suivi d’un point suivi d’autres lettres (“[a-z]*(\.[a-z]*”) pour finir avec un point et des lettres.

// “(:\d+)?\/?$/i” montre que l’url peut finir avec “:” suivi de chiffres ainsi qu’un “/”, mais cela est facultatif.