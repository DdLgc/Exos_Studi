<?php

require_once 'PriceFormatter.php';

class Product
{
  protected string $name;
  protected float $price;
  protected PriceFormatter $formatter;

  public function __construct (string $name, float $price, PriceFormatter $formatter)
  {
    $this->formatter = $formatter;
    $this->name = $name;
    $this->setPrice($price);
  }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name):self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    protected function setPrice($price):self
    {
      if ($price > 0 )
      {
        $this->price = $price;
      }
        return $this;
    }

    public function getFormattedPrice(): string 
    {
      return $this->$formatter->format($this->price);
    }
}