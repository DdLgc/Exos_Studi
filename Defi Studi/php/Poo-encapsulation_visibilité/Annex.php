<?php

interface AnnexInterface
{
    public function getAdditionalSurface(): float;
}
abstract class Annex implements AnnexInterface
{
    private float $surface;
    public function __construct(float $surface)
    {
        $this->setSurface($surface);
    }
    public function getSurface(): float
    {
        return $this->surface;
    }
    public function setSurface(float $surface): void
    {
        $this->surface = $surface;
    }
}