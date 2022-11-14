<!-- Un garage répare des voitures, des quads, des scooters, des motos et des trikes. Pour chaque réparation, il a besoin d'acheter des pneus neufs : il préfère remplacer toutes les roues du véhicule, par précaution. Chaque type de véhicule possède un nombre variable de roues : les voitures et les quads en ont 4, les trikes en ont 3, et les scooters et motos en ont 2. Pour tous les autres véhicules (remorques, monocycles, et autres), il achète quand même un pneu par sécurité.

Il a le choix entre deux fabricants de pneus, qui ont différents tarifs :

"Pneufs" vend ses pneus 60 € pièce, mais si on lui en achète 4, alors il propose une remise de 15 % sur la facture finale.

"Roues cool" vend ses pneus 75 € pièce, mais, à partir du troisième, il propose une remise de 25 % sur la facture finale.

Écrivez un script qui sera appelé à chaque réparation de véhicule. Ainsi, à partir d'une variable contenant le type de véhicule, votre script va afficher le nom du fournisseur le plus intéressant. -->

<?php
$type = 'voiture'; // À changer à chaque réparation
switch ($type) {
    case 'voiture':
    case 'quad':
        $nbPneus = 4;
        break;
    case 'trike':
        $nbPneus = 3;
        break;
    case 'moto':
    case 'scooter':
        $nbPneus = 2;
        break;
    default:
        $nbPneus = 1;
}
$pneufPrice = $nbPneus*60;
if ($nbPneus === 4) {
    $pneufPrice *= 0.85;
}
$rouesCoolPrice = $nbPneus*75;
if ($nbPneus >= 3) {
    $rouesCoolPrice *= 0.75;
}
if ($pneufPrice < $rouesCoolPrice) {
    echo 'pneuf';
} else {
    echo 'rouesCool';
}



// À changer à chaque réparation
// Affectation du nombre de pneus à la variable $nbPneus
// Calcul des deux prix $pneufPrice et $rouesCoolPrice
// Affichage du nom du fournisseur le plus intéressant
