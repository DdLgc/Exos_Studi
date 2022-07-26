<?php

// Premier exo 

// Mettez ici votre plan de bataille
$goldCoinsInYourPocket = 2;
$heroOpensTheChest = true;
$goDownAtTheStairs = false;
$doYouTrustGoblins = true;
// Ne touchez plus à rien à partir de là
if ($goldCoinsInYourPocket > 10) {
  echo 'Votre bourse déborde et toutes les pièces tombent sur le sol. Il ne vous en reste plus que 10.<br>';
  $goldCoinsInYourPocket = 10;
}
echo 'Vous pénétrez dans l\'antre du sorcier... Un coffre se situe à droite et une porte est à gauche<br>';
$hasSword = false;
if ($heroOpensTheChest && $goldCoinsInYourPocket > 3) {
  echo 'Le coffre était en réalité un monstre qui avait l\'apparence d\'un coffre ! Il se réveille grâce à la forte odeur d\'or qui émane de votre bourse et vous dévore.<br>FIN =(';
  return;
} elseif ($heroOpensTheChest && $goldCoinsInYourPocket <= 3) {
  echo 'En ouvrant le coffre, vous vous rendez compte qu\'il est rempli de dents. C\'est en réalité un monstre ayant l\'apparence d\'un coffre ! Heureusement, il semble endormi, ce qui vous permet de récupérer son contenu : <b>une épée</b> !<br>';
  $hasSword = true;
}
echo 'Vous vous dirigez vers la porte et l\'ouvrez pour vous retrouver face à un escalier en colimaçon. Vous pouvez soit monter à l\'étage, soit descendre au sous-sol.<br>';
$hasShield = false;
if (!$goDownAtTheStairs) {
  echo 'Vous montez les escaliers et ouvrez la porte du premier étage. Un gobelin vous y attend et vous propose de vous vendre un objet utile pour 2 pièces d\'or.<br>';
  if ($doYouTrustGoblins && $goldCoinsInYourPocket < 2) {
    echo 'Vous n\'avez pas assez d\'argent pour le gobelin. De rage, ce dernier sort une dague et vous la plante dans le ventre.<br>FIN =(';
    return;
  } elseif ($doYouTrustGoblins && $goldCoinsInYourPocket >= 2) {
    echo 'Vous lui donnez deux pièces d\'or. Un peu étonné, il les prend et disparaît derrière une armoire quelques instants, avant de ressortir avec <b>un bouclier</b> flambant neuf ! Il n\'y a plus rien à faire à l\'étage, vous redescendez au sous-sol.<br>';
    $hasShield = true;
    $goldCoinsInYourPocket -= 2;
  } else {
    echo 'Vous ne faites pas confiance au gobelin. Vous fermez la porte et redescendez au sous-sol.<br>';
  }
}
echo 'Vous descendez en direction du sous-sol. À chaque marche, des chants démoniaques se font entendre de plus en plus clairement. Le sorcier est en bas, et, si vous n\'intervenez pas, les démons envahiront notre monde. Vous arrivez finalement en bas et voyez le sorcier au milieu d\'un pentagramme illuminé d\'une couleur rouge sang. Il vous regarde en souriant, puis, sans crier gare, incante une boule de feu qu\'il envoie dans votre direction !<br>';
if (!$hasShield) {
  echo 'Sans protection, vous vous prenez la boule de feu de plein fouet. Vous n\'êtes plus qu\'un petit tas de cendres fumant.<br>FIN =(';
  return;
}
echo 'Vous vous protégez de justesse avec votre bouclier, qui se désintègre sous la violence du choc. Le sorcier ne s\'attendait pas à vous voir encore en vie, ce qui vous permet de foncer vers lui avant qu\'il ne relance un sort.<br>';
if ($hasSword) {
  echo 'D\'un coup d\'épée net, vous lui coupez la tête. La lumière du pentagramme diminue progressivement avant de s\'éteindre. Vous avez sauvé le monde de l\'invasion des démons ! Vous sortez de l\'antre du sorcier en sueur.<br>';
} else {
  echo 'Vous le plaquez au sol et le rouez de coups de poings. Hélas, ça ne suffit pas et il se dégage d\'un coup de pied. Vous tombez au sol pendant qu\'il incante une nouvelle boule de feu qui, cette fois, vous touche de plein fouet.<br>FIN =(';
  return;
}
if ($goldCoinsInYourPocket > 0) {
  echo 'Il vous reste un peu d\'argent : vous décidez donc de les dépenser à la taverne pour vous remettre de cette aventure. Le peuple se souviendra de votre acte héroïque pour les siècles à venir.<br>FIN =D !';
} else {
  echo 'Vous décidez de rentrer chez vous pour prendre un peu de repos bien mérité. Vous ne savez pas de quelles aventures demain sera fait, mais au moins, il ne sera pas fait de démons.<br>FIN =) !';
}

// meilleur trajet possible 
$goldCoinsInYourPocket = 2;
$heroOpensTheChest = true;
$goDownAtTheStairs = false;
$doYouTrustGoblins = true;

// --------------------------Opérateur Booléen-----------------------------

// Une agence de voyage gère les départs de ses groupes de voyageurs selon trois critères :
// Est-ce que le groupe est au complet ou non ?
// Est-ce qu'un avion est disponible ? Dans le cas contraire, un bateau sera préparé.
// Est-ce que la destination est dangereuse ?

<?php 
$isGroupFull = true;
$isPlaneAvailable = true;
$isDestinationDangerous = false;
// Cette variable décide du départ
$canWeGo = !$isDestinationDangerous && $isPlaneAvailable && $isGroupFull;
if ($canWeGo) {
  echo 'Départ imminent !';
}

// Le message "Départ Imminent !" ne s'affiche que lorsque les variables sont égales à :

$isGroupFull = true;
$isPlaneAvailable = true;
$isDestinationDangerous = false;

// -------------------------------------------------------

// Un groupe de courageux se présentent à l'agence. Ils ne craignent aucune destination tant qu'ils sont ensemble, mais veulent une destination sans danger s'ils ne sont pas au complet. Dans tous les cas, l'avion ou le bateau leur vont.

$canWeGo = $isGroupFull || !$isDestinationDangerous;

// -------------------------------------------------------

// Un groupe de casse-cous se présente à l'agence de voyage. Ce groupe n'a pas froid aux yeux et ne veut participer qu'à des expéditions dans des zones dangereuses. De plus, ils sont impatients : si leur groupe est au complet, ils n'attendront pas que l'avion soit prêt pour partir et prendront le bateau. En revanche, si leur groupe n'est pas au complet, mais que l'avion est disponible, alors ils partiront : tant pis pour les retardataires !

$canWeGo = $isDestinationDangerous && ($isPlaneAvailable || $isGroupFull )

// --------------------------Opérateur Comparaison-----------------------------

// 'il n'y a plus d'argent dans son porte-monnaie, alors le message "Votre porte-monnaie est vide" doit apparaître.
// S'il possède entre 5 et 10 euros, alors le message "Consultez notre rayon 'promotions' !" doit apparaître.
// S'il possède strictement plus de 500 euros, alors le message "Le rayon VIP vous attend !" doit apparaître.
// Dans les autres cas, aucun message particulier ne doit apparaître.

$walletAmount = 510;
$isEmpty = $walletAmount === 0;
$hasLowAmount = $walletAmount >= 5 && $walletAmount <=10;
$isVip = $walletAmount > 500;
if ($isEmpty) {
  echo 'Votre porte-monnaie est vide';
}
if ($hasLowAmount) {
  echo 'Consultez notre rayon \'promotions\' !';
}
if ($isVip) {
  echo 'Le rayon VIP vous attend !';
}