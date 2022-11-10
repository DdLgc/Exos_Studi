<!-- Les accesseurs (getters) sont des méthodes permettant de récupérer la valeur d'une propriété. Leur nom est sous la forme getPropertyName.

Les mutateurs (setters) sont des méthodes permettant d'assigner une valeur à une propriété et de vérifier sa validité. Leur nom est sous la forme setPropertyName.

Ces méthodes permettent de gérer la visibilité des opérations de lecture et d'écriture d'une propriété. Pour cela, il faut que la propriété ait une visibilité privée et que toutes les manipulations soient faites avec les méthodes.

Les fluent setters sont des mutateurs qui retourne l'objet courant : cela permet d’enchaîner les appels. -->

          <!-- Exos  -->

<!-- Un restaurant souhaiterait avoir une application permettant de gérer les plats commandés par ses clients.

Un plat possède les caractéristiques suivantes :

Un nom, qui est une chaîne de caractères. Il doit être défini dans le constructeur, être accessible depuis l’extérieur en lecture, mais ne doit pas être modifiable.

Une liste d'ingrédients en supplément, qui est un tableau de chaînes de caractères. Ce sont les ingrédients que les utilisateurs veulent rajouter dans leur plat. Ils doivent être modifiables et accessibles depuis l’extérieur de notre classe.

Un prix, qui est un nombre à virgule. Il doit être défini dans le constructeur et ne doit pas être modifiable. On doit pouvoir cependant récupérer le prix à l’extérieur de la classe, mais en prenant en compte la majoration de 1 € par ingrédient supplémentaire. Il doit être manipulable directement par les classes filles.

Créez une classe permettant de gérer ces contraintes.

$meal = new Meal('Salade Caesar', 10.50);
$meal->setIngredients(['Olives', 'Cheddar']);
echo $meal->getPrice(); // Affiche 12.5 -->


<?php

class Meal 
{
  private string $name;
  private array $ingredients;
  protected float $price;

  public function __construct(string $name, float $price)
  {
    $this->setName($name);
    $this->setPrice($pirce);
    $this->ingredients= [];
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(): void
  {
    $this->name = $name;
  }

  public function getIngredients(): array
  {
    return $this->ingredients;
  }

  public function setIngredients(array $ingredients): void
  {
    $this-> ingredients = $ingredients;
  }

  public function getPrice(): float
  {
    return $this->price + count ($this->ingredients);
  }

  public function setPrice($price)
  {
    $this->price = $price;
  }
}
// Exemple d'utilisation : 
$meal = new Meal('Salade Caesar', 10.50);
$meal->setIngredients(['Olives', 'Cheddar']);
echo $meal->getPrice(); // Affiche 12.5