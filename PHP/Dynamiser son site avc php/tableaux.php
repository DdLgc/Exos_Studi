<!-- ----------------tableaux indexé----------------- -->
<?php
$names = ['Lisa', 'Mathieu', 'Laure', 'Simon','David'];

Question
À l'aide de repl.it, écrivez le code permettant d'afficher "Bonjour Laure" (en tirant son prénom du tableau).

echo 'Bonjour'.' '.$names[2];

Ajoutez votre nom à ce tableau et affichez-le.

echo 'Bonjour'.' '.$names[4];


// ---------------tableaux associatifs-------------------

La famille Weasley a gagné au loto, Ron se voit ainsi plus riche de 5 gallions ! Modifiez le code pour recalculer sa richesse en noises.

$ron = ['name' => 'Ron Weasley', 'knuts' => 10, 'sickles' => 2, 'galleons' => 5];
$knuts = $ron['knuts'];
$knuts += $ron['sickles'] * 29;
$knuts += $ron['galleons'] * 17 * 29;
    echo $ron['name'].' possède l\'équivalent de '.$knuts.' noises';

    Ce qui affiche : Ron Weasley possède l'équivalent de 2533 noises.
    
Afin d'empocher cet argent, il faut prouver que Ron soit majeur ! Modifiez le code afin de renseigner son âge dans le tableau.

$ron = ['name' => 'Ron Weasley', 'knuts' => 10, 'sickles' => 2, 'galleons' => 5, 'euros' => 15];
$ron['age'] = 18;
echo 'Ron est majeur car il a '.$ron['age'].' ans.'

Suite à son dernier passage chez les moldus, c'est-à-dire les non-sorciers, il reste également à Ron 15 euros. Sachant qu'un euro vaut 61 noises, modifiez le code pour prendre en compte ses euros dans le tableau et le calcul. Quel est l'équivalent en noises qu'il possède ?

Solution
$ron = ['name' => 'Ron Weasley', 'knuts' => 10, 'sickles' => 2, 'galleons' => 5, 'euros' => 15];
$knuts = $ron['knuts'];
$knuts += $ron['sickles'] * 29;
$knuts += $ron['galleons'] * 17 * 29;
$knuts += $ron['euros'] * 61;
echo $ron['name'].' possède l\'équivalent de '.$knuts.' noises'


// ---------------tableaux multidimensionnelle-------------------

$teams = [
  [
      'name' => 'Golden Guardians', 
      'members' => [
          ['firstName' => 'Kevin', 'lastName' => 'Yarnell'],
          ['firstName' => 'Can', 'lastName' => 'Çelik'],
          ['firstName' => 'Greyson', 'lastName' => 'Gilmer'],
          ['firstName' => 'Victor', 'lastName' => 'Huang'],
          ['firstName' => 'Choi', 'lastName' => 'Jae-hyun'],  
          ['firstName' => 'Yuri', 'lastName' => 'Jew'], 
      ],
      'coach' => ['firstName' => 'Nick', 'lastName' => 'Smith']
  ],
  [
      'name' => 'Immortals', 
      'members' => [
          ['firstName' => 'Paul', 'lastName' => 'Boyer'],
          ['firstName' => 'Jake', 'lastName' => 'Puchero'],
          ['firstName' => 'Jérémy', 'lastName' => 'Valdenaire'],
          ['firstName' => 'Johnny', 'lastName' => 'Ru'],
          ['firstName' => 'Nickolas', 'lastName' => 'Surgent'],  
      ],
      'coach' => ['firstName' => 'Thomas', 'lastName' => 'Si-Hassen']
  ],
];
En vous aidant de repl.it, affichez le nom de la première équipe ?

echo $teams[0]['name'];
echo $teams[1]['members'][0]['lastName'];


On veut rajouter les informations du coach de chaque équipe. Rajoutez donc pour chaque équipe une clef "coach" qui pourra recevoir le nom et le prénom du coach, sachant que le coach des Golden Guardians est Nick Smith et que celui des Immortals est Thomas Si-Hassen.
Affichez le nom de famille des deux coachs pour tester votre ajout.

echo $teams[0]['coach']['lastName'];
echo '<br>';
echo $teams[1]['coach']['lastName'];


//--------------qqles fonctions pour les tableaux-------------










