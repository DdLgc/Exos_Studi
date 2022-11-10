En plus des voitures électriques et à essence, notre concessionnaire vend également des pneus. Un pneu possède certaines caractéristiques, comme sa largeur, sa hauteur et son diamètre.

Sur la fiche produit de nos pneus, ces caractéristiques vont être affichées de la même manière que les caractéristiques de nos voitures, c'est-à-dire dans une liste à puces. Le but de cet exercice est d'adapter le code pour rendre cela possible.

Créez une classe Tire permettant de gérer les pneus.

<?php

class Tire 
{
  public float $diameter;
  public float $height;
  public float $width;

  public function __construct(float $diameter, float $height, float $width)
  {
    $this->diameter = $diameter;
    $this->height = $height;
    $this->width = $width;
  }
}