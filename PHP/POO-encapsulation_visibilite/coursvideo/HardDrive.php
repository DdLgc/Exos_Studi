<?php

require_once 'Product.php';

class HardDrive extends Product
{
  protected int $capacity;

  public function __construct(string $name, float $price, PriceFormatter $formatter,int $capacity)
  {
    parent::__construct($name, $price, $formatter);
    $this->capacity = $capacity;
  }

    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function setCapacity($capacity): self
    {
        $this->capacity = $capacity;

        return $this;
    }
}