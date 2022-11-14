<?php
abstract class RealEstate {
    private string $address;
    private float $price;
    private float $surface;
    private ?Annex $annex;
    public function __construct(string $address, float $price, float $surface, ?Annex $annex = null)
    {
        $this->setAddress($address);
        $this->setPrice($price);
        $this->setSurface($surface);
        $this->setAnnex($annex);
    }
    public function getAddress(): string
    {
        return $this->address;
    }
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }
    public function getPrice(): float
    {
        return $this->price;
    }
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
    public function getSurface(): float
    {
        if ($this->annex !== null) {
            return $this->surface + $this->annex->getAdditionalSurface();
        }
        return $this->surface;
    }
    public function setSurface(float $surface): void
    {
        $this->surface = $surface;
    }
    public function getAnnex(): ?Annex
    {
        return $this->annex;
    }
    public function setAnnex(?Annex $annex): void
    {
        $this->annex = $annex;
    }
}
