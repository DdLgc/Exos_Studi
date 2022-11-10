<?php
// $product = json_decode(base64_decode('eyJuYW1lIjoiQ2FydGUgbVx1MDBlOHJlIiwic3RvY2siOiIxMiIsImJyYW5kIjoiQXN1cyJ9'), true);

// // var_dump($product);

// echo $product['name'].'('.$product['brand'].') : '.$product['stock'];


// class Product {
//   public string $name;
//   public string $brand;
//   public string $stock;
//   public float $price;
// }



// fichier Moto.php
class Moto
{
    public string $brand;
    public string $color;
    public float $maxSpeed;
    public function __construct(string $brand, string $color, float $maxSpeed)
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->maxSpeed = $maxSpeed;
    }
    public function getDescription(): string
    {
        return $this->brand.' '.$this->color.' ayant une vitesse maximale de '.$this->maxSpeed.'km/h'.PHP_EOL;
    }
    public function __destruct() {
      echo $this->brand.' '.$this->color.' rentre au garage'.PHP_EOL;
    }
}

// Écrivez une classe Race qui va organiser une course entre deux motos : chaque moto sera une propriété, et la classe Race aura une méthode startRace qui va lancer la course et retourner la moto qui aura gagné, c'est-à-dire la moto la plus rapide.
// Dans votre script principal, instanciez deux motos et une course et affichez la description de la moto gagnante. Assurez-vous ensuite que toutes les motos retournent au garage.

// fichier Race.php
class Race
{
    public Moto $moto1;
    public Moto $moto2;
    public function __construct(Moto $moto1, Moto $moto2)
    {
        $this->moto1 = $moto1;
        $this->moto2 = $moto2;
    }
    public function startRace(): Moto
    {
        if ($this->moto1->maxSpeed > $this->moto2->maxSpeed) {
            return $this->moto1;
        }
        return $this->moto2;
    }
}

// fichier index.php
include 'Moto.php';
include 'Race.php';
$moto1 = new Moto("Yamaha", "rouge", 210);
$moto2 = new Moto("Suzuki", "bleue", 180);
$race = new Race($moto1, $moto2);
echo $race->startRace()->getDescription();
 // cette ligne va donc lancer la fonction startRace dans la classe Race puis retourner la description de la moto qui aura gagné la course. Pour rappel, la fonction startRace va retourner une moto gagnante (class Moto) et la fonction getDescription est présente dans la classe Moto.