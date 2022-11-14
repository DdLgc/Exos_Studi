
<?php

final class Parking extends Annex
{
    private int $number;
    public function __construct(float $surface, int $number)
    {
        parent::__construct($surface);
        $this->setNumber($number);
    }
    public function getNumber(): int
    {
        return $this->number;
    }
    public function setNumber(int $number): void
    {
        $this->number = $number;
    }
    public function getAdditionalSurface(): float
    {
        return 0;
    }
}
