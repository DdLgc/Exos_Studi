<?php
// Fichier Car.php
class Car
{
    public float $price;
    public string $brand;
    public function __construct(float $price, string $brand)
    {
        $this->price = $price;
        $this->brand = $brand;
    }
}

// En utilisant l'héritage, créez deux classes ElectricCar et GasolineCar permettant de structurer les données manipulées par ce concessionnaire et instanciez une voiture électrique et une voiture à essence avec les valeurs de votre choix.