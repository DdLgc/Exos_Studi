<!-- Écrivez un script permettant de déterminer, à partir du poids de deux boxeurs, s'ils peuvent combattre ensemble ou non. Pour simplifier, nous n'allons gérer que le cas des poids lourds, c'est-à-dire les boxeurs de plus de 90,7 kg. Le script devra donc vérifier les deux poids et afficher "FIGHT !" si les deux boxeurs sont tous les deux des poids lourds, ou "Impossible de combattre !" dans le cas contraire.

Les deux poids seront stockés dans des variables. -->

<?php
$boxer1Weight = 80.4;
$boxer2Weight = 92.2;
// Faire le traitement ici
if ($boxer1Weight >= 90.7 && $boxer2Weight >= 90.7) {
  echo "FIGHT";
} else {
  echo "Impossible de combattre";
}
// Voici les différents cas de tests qui devront être gérés par votre script :

$boxer1Weight = 80.4;
$boxer2Weight = 92.2;
// Doit afficher "Impossible de combattre !" car boxer1 n'est pas poids lourd
$boxer1Weight = 95.6;
$boxer2Weight = 78.1;
// Doit afficher "Impossible de combattre !" car boxer2 n'est pas poids lourd
$boxer1Weight = 54.4;
$boxer2Weight = 70.2;
// Doit afficher "Impossible de combattre !" car les deux boxeurs ne sont pas des poids lourds
$boxer1Weight = 100.7;
$boxer2Weight = 98.3;
// Doit afficher "FIGHT !" car les deux boxeurs sont tous les deux des poids lourds
$boxer1Weight = 90.7;
$boxer2Weight = 98.3;

// --------------------------condition ------------------------------


//  poids mi-lourds (entre 76,2 et 79,3 kg)
//  poids lourds-légers (entre 79,3 et 90,7 kg)
//  poids lourds (plus de 90,7 kg)

// Si les deux boxeurs sont dans la même catégorie, il faudra afficher "FIGHT" suivi du nom de la catégorie (par exemple, "FIGHT POIDS LOURDS" ou "FIGHT POIDS MI-LOURDS"). Sinon, le message "Impossible de combattre" devra être affiché.
// Si un participant a un poids à la limite de deux catégories, on considère quil peut combattre dans les deux. Ainsi, un combattant pesant 79,3 kg peut affronter un combattant lourd-léger ou un combattant mi-lourd.

// Voici les différents cas de tests que votre script devra respecter :
  
  if ($boxer1Weight >= 90.7 && $boxer2Weight >= 90.7) {
    echo"FIGHT POIDS LOURD !";
} elseif  ($boxer1Weight <= 90.7 && $boxer1Weight >= 79.3 && $boxer2Weight <= 90.7 && $boxer2Weight >= 79.3) {
  echo "FIGHT LOURDS-LEGERS";
} elseif ($boxer1Weight<= 79.3 && $boxer1Weight >= 76.2 && $boxer2Weight <=79.3 && $boxer2Weight >=76.2 ) {
  echo"FIGHT MI-LOURDS"
} else {
  echo"Impossible de combattre!"
};



$boxer1Weight = 54.4;
$boxer2Weight = 70.2;
// Doit afficher "Impossible de combattre !" car les deux boxeurs ne sont pas dans la même catégorie 
$boxer1Weight = 77.1;
$boxer2Weight = 79.1;
// Doit afficher "FIGHT MI-LOURDS !"
$boxer1Weight = 86.2;
$boxer2Weight = 79.9;
// Doit afficher "FIGHT LOURDS-LEGERS !"
$boxer1Weight = 100.4;
$boxer2Weight = 90.7;
// Doit afficher "FIGHT POIDS LOURDS !" car le boxer2 pese pile 90.7 kg, il peut combattre un poids lourd
$boxer1Weight = 79.9;
$boxer2Weight = 90.7;
// Doit afficher "FIGHT LOURDS-LEGERS !" car le boxer2 pese pile 90.7 kg, il peut aussi combattre un poids lourd-leger



// --------------------------switch ------------------------------

// La boxe anglaise permet de nutiliser que les poings,
// La savate BF et le kick-boxing américain permettent dutiliser les poings et les pieds,
// Le kick-boxing japonais permet dutiliser les poings, pieds et genoux,
// La boxe birmane, la boxe khmère, la boxe thaï et le shoot-boxing permettent dutiliser tout le haut du corps.

// Écrivez un script permettant d'afficher les règles d'un combat de boxe selon le type voulu. Si un type n'est pas dans la liste, on considère que l'on peut utiliser tout le haut du corps. Voici les cas de tests :

$boxeType = 'savate BF';
// Doit afficher "Pieds et poings"
$boxeType = 'boxe khmère';
// Doit afficher "Tout le haut du corps"
$boxeType = 'kick-boxing américain';
// Doit afficher "Pieds et poings"
$boxeType = 'MMA';
// Doit afficher "Tout le haut du corps", car MMA n'est pas dans la liste
$boxeType = 'kick-boxing japonais';
// Doit afficher "Poings, pieds et genoux"

switch ($boxeType) {
  case'boxe anglaise':
    echo 'Poings';
    break;
  case'savate BF':
  case'kick-boxing américain':
    echo 'Pieds poings'
    break; 
  case'kick boxing japonais':
    echo 'tout le haut du corp';
    break;
  default:
    echo'Tout le haut du corp';
} 