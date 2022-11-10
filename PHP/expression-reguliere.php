<?php
// $subject = '0123456789';
// $search ='456';
// $offset = 5;
// $pattern='/$search/';

//  if (preg_match_all($pattern,$subject,$matches, null, $offset)) {
//   echo "$search  est présent dans subject".substr($subject, $offset);
//  } else {
//   echo "$search n'est pas présent dans ".substr($subject, $offset);
//  }

// var_dump($matches). PHP_EOL;


$sentence = 'Alice was beginning to get very tired of sitting by her sister on the bank, and of having nothing to do: once or twice she had peeped into the book her sister was reading, but it had no pictures or conversations in it, “and what is the use of a book,” thought Alice “without pictures or conversations?”.';
$count = preg_match_all('/Alice/', $sentence, $matches);
echo 'Le mot Alice est présent '. $count .' fois.';

// Grâce à la fonction PHP adéquate et aux groupes et alternatives, comptez le nombre de fois où les mots she et the apparaissent dans le texte.

$sentence = 'Alice was beginning to get very tired of sitting by her sister on the bank, and of having nothing to do: once or twice she had peeped into the book her sister was reading, but it had no pictures or conversations in it, “and what is the use of a book,” thought Alice “without pictures or conversations?”';
if (preg_match_all('/(s|t)he/', $sentence, $matches)) {
    echo 'Les mots "she" et "the" sont présents '.count($matches[0]).' fois.';
} else {
    echo 'Les mots "she" et "the" ne sont pas présents';
}


// Quantificateur 

$sub = 'zerty azerty aazerty aaazerty aaaazerty ';
$pattern= '/a{0,1}zerty/';   // a?zerty 
preg_match_all($pattern,$sub,$matches);
var_dump($matches);

$pattern='/a{1,}zerty/'; // a+zerty
preg_match_all($pattern,$sub,$matches);
var_dump($matches);

$pattern='/a{0,}zerty/'; // a*zerty
preg_match_all($pattern,$sub,$matches);
var_dump($matches);

$pattern='/a{2,4}zerty/'; 
preg_match_all($pattern,$sub,$matches);
var_dump($matches);


          // Exo 

// Grâce au code PHP adéquat, vérifiez que les trois premiers numéros de téléphone sont corrects et que les deux derniers ne le sont pas.

$phoneNumbers = [
  '0102030405',
  '0112030405',
  '01 02 03 04 05',
  '1102030405',
  '01.02.03.04.05',
];
foreach ($phoneNumbers as $phoneNumber) {
  if (preg_match('/0(1|2|3|4|5|6|7|8|9|0)( ?((0|1|2|3|4|5|6|7|8|9|0)(0|1|2|3|4|5|6|7|8|9|0))){4}/', $phoneNumber)) {
      echo "$phoneNumber est au bon format.".PHP_EOL;
  } else {
      echo "$phoneNumber n'est pas au bon format.".PHP_EOL;
  }
}
// La boucle parcourt l’intégralité du tableau “$phoneNumbers”. Le if regarde dans un premier temps si le numéro commence bien par un 0 puis si le prochain caractère est bien un chiffre compris 0 et 9.

// Ensuite il regarde les autres nombres, s’ils commencent et finissent avec des chiffres compris entre 0 et 9, et il le regarde 4 fois.

// Les deux derniers numéros sont faux car le premier nombre ne commence pas par un 0 pour le numéro “1102030405”, et pour le numéro “01.02.03.04.05”, comme le if ne prend en compte que les chiffres, les “.” ne sont donc pas autorisés. 

          // Exo 

// Grâce à la fonction PHP adéquate, vérifiez que toutes ces adresses e-mails sont correctes :

//   john@doe.fr
//   john@localhost
//   john+1@localhost

//   Mais pas celles-là :
//   @doe.fr
//   john@.fr

$mails =['john@doe.fr',
'john@localhost',
'john+1@localhost',
'@doe.fr',
'john@.fr'];

foreach ($mails as $mail) {
  if( preg_match('/[\w+]+@\w+(\.\w*)?/',$mail)) {
    echo "$mail est au bon format.".PHP_EOL;
} else {
    echo "$mail n'est pas au bon format.".PHP_EOL;
}
}
// La boucle parcourt l’intégralité du tableau “$mails”.

//  Le if vérifie si le mail commence bien par des lettres et des chiffres (\w), ensuite s’il dispose bien d’un “@”. Le “\.” qui se trouve ici “(\.\w*) permet au “.” de ne plus être considéré comme un caractère spécial mais plutôt comme un simple point. La vérification continue en regardant si le mail finit bien par un “.” et des lettres.


// Grâce à la fonction PHP adéquate, vérifiez que toutes ces adresses e-mails sont correctes :

  // john@doe.fr
  // john@localhost
  // john+1@localhost
  // John+1@localhost
  
  // Mais pas celles-là :
  // john+1@localhost+1
  // +1@doe.fr
  // @doe.fr
  // john@.fr
  // Cette fois, vous partirez du pattern ^[a-z][a-z0-9+]*@[a-z]+(\.[a-z]+)?$. Vous ne pourrez pas le modifier, mais vous pouvez jouer avec les options.



  $adresses = [ 
    'john+1@localhost+1 ',
    '+1@doe.fr' ,
    '@doe.fr' ,
    'john@.fr' ,
    'john@doe.fr' ,
    'john@localhost' ,
    'john+1@localhost' ,
    'John+1@localhost'
    ];
    
    foreach ($adresses as $adress) {
      if( preg_match('/^[a-z][a-z0-9+]*@[a-z]+(\.[a-z]+)?$/i',$adress)) {
        echo "$adress est au bon format.".PHP_EOL;
    } else {
        echo "$adress n'est pas au bon format.".PHP_EOL;
    }
    }

// La boucle parcourt l’intégralité du tableau “$adresses”

//  Le if vérifie si le mail commence bien par des lettres et s’il est bien suivi de chiffres ou de lettres avant le “@”. La vérification continue en regardant si le mail finit bien par un “.” et des lettres.