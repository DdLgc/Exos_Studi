<!-- Une agence immobilière a besoin d'une application pour gérer ses biens immobiliers. Il existe deux types de biens immobiliers : les appartements et les maisons. Un appartement possède une adresse, un étage (0 pour rez-de-chaussée, 1 pour premier étage, etc.), un prix et une surface habitable. Une maison, quant à elle, possède une adresse, une surface habitable, un prix et un nombre de niveaux (1 pour plain-pied, 2 s'il y a un étage, etc.). Le nombre de niveaux doit toujours être strictement positif (en cas de donnée invalide, on peut le mettre à 1), tandis que le numéro de l'étage peut être négatif (pour les appartements en sous-sol).

L'adresse et la surface ne doivent pas pouvoir être modifiées une fois l'objet créé. En revanche, le prix peut être négocié.

Écrivez le code de cette application en utilisant une structure de code facilement maintenable. -->

<?php

// prix 
// adresse  | pas modifiable 
// surface  |
// etage 


// Chaque bien immobilier peut être associé à une annexe, mais ce n'est pas obligatoire. Il existe plusieurs types d'annexes : les jardins, et les places de parking. Les deux possèdent une surface qui ne doit pas être modifiable, mais seule celle des jardins doit être comprise dans la surface habitable. Les jardins possèdent également une caractéristique permettant de définir si une piscine est présente ou non, tandis que les stationnements ont un numéro de place.

// Utilisez la composition pour ajouter des informations dans votre application immobilière.

$garden = new Garden(20, true);
$parking = new Parking(6, 2);
$house = new House('102 rue des noyers', 350000.00, 120, 2);
echo $house->getSurface().'<br>'; // Affiche 120, car il n'y a pas d'annexe
$house->setAnnex($garden);
echo $house->getSurface().'<br>'; // Affiche 140 car le jardin est compris dans l'annexe
$flat = new Flat('45 rue de la république', 150000, 30, 3, $parking);
echo $flat->getSurface().'<br>'; // Affiche 30 car le parking n'est pas compris dans le calcul