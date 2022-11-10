<?php
// Fichier Car.php
// On vient préciser avec le require_once que nous allons avoir besoin de l'interface qui se trouve dans le fichier CharacteristicsDisplayable
require_once 'CharacteristicsDisplayable2.php';
class Car2 implements CharacteristicsDisplayable2
{
  public float $price;
  public string $brand;
  public function __construct(float $price, string $brand)
  {
      $this->price = $price;
      $this->brand = $brand;
  }
  public function getCharacteristics(): array
  {
      return [
          'price' => $this->price,
          'brand' => $this->brand,
      ];
  }
}