<?php
// Fichier GasolineCar.php
require_once 'Car.php';
class GasolineCar extends Car
{
    public float $co2Emission;
    public function __construct(float $price, string $brand, float $co2Emission)
    {
        $this->price = $price;
								$this->brand = $brand;
 // La caractéristique co2Emission étant absente d'une voiture éléctrique, 
 // on ajoute ce paramètre uniquement lors de la "construction" de l'objet GasolineCar.
 
		            $this->co2Emission = $co2Emission;
		}
}