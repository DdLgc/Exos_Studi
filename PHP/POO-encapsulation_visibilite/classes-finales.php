<!-- Les classes finales sont des classes qui ne peuvent pas avoir de classes filles.

Il est préférable d'utiliser la composition plutôt que l'héritage pour garder une structure simple et tester plus facilement notre code.

Les classes finales permettent ainsi de contrôler l'évolution de notre projet.
-->

            <!-- Exos -->

<!-- 
Un musée est en charge de peintures et de sculptures. Ces deux œuvres ont des caractéristiques communes : un titre, et le nom de l'artiste qui l'a réalisée. Cependant, les peintures ont aussi un type (aquarelle, peinture à l'huile, gouache...). Les sculptures, quant à elles, ont une hauteur en centimètres.

Le logiciel actuel du musée permet déjà de gérer la base des informations avec la classe abstraite suivante : -->
<!-- Implémentez cette classe abstraite en créant deux classes finales représentant les peintures et les sculptures. -->

<?php
abstract class Artwork
{
    private string $title;
    private string $artist;
    public function __construct(string $title, string $artist)
    {
        $this->title = $title;
        $this->artist = $artist;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
    public function getArtist(): string
    {
        return $this->artist;
    }
    public function setArtist(string $artist): void
    {
        $this->artist = $artist;
    }
}


final class Painting extends Artwork
{
    private string $type;

    public function __construct(string $title, string $artist, string $type)
    {
        $this->type = $type;
        parent::__construct($title, $artist);
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }
}

final class Sculpture extends Artwork
{
    private int $height;

    public function __construct(string $title, string $artist, int $height)
    {
        $this->height = $height;
        parent::__construct($title, $artist);
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function setHeight(int $height): void
    {
        $this->height = $height;
    }
}


// Les statues sont posées sur des socles, ce qui augmente leur taille finale. Le musée dispose de deux types de socles : des socles fixes de 10 cm et des socles extensibles, qui peuvent avoir une taille entre 5 et 15 cm, avec une position de base à 5 cm.

// Intégrez les socles dans votre code pour calculer correctement la taille de la statue dans son accesseur.

// Attention : normalement, votre classe représentant les sculptures est une classe finale. Interdiction donc de créer des classes filles SculptureWithFixedPedestal et SculptureWithVariablePedestal pour gérer ces nouveaux cas !

interface Pedestal
{
    public function getPedestalHeight(): int;
}
class FixedPedestal implements Pedestal
{
    public function getPedestalHeight(): int
    {
        return 10;
    }
}
class VariablePedestal implements Pedestal
{
    private int $height = 5;
    public function __construct(int $height)
    {
        $this->setHeight($height);
    }
    public function getHeight(): int
    {
        return $this->height;
    }
    public function setHeight(int $height): void
    {
        if ($height < 15 && $height > 5) {
            $this->height = $height;
        }
    }
    public function getPedestalHeight(): int
    {
        return $this->getHeight();
    }
}
final class Sculpture extends Artwork
{
    private int $height;
    private Pedestal $pedestal;
    public function __construct(string $title, string $artist, int $height, Pedestal $pedestal)
    {
        $this->height = $height;
        $this->pedestal = $pedestal;
        parent::__construct($title, $artist);
    }
    public function getHeight(): int
    {
        return $this->height + $this->pedestal->getPedestalHeight();
    }
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }
}