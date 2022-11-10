<?php

require_once 'CharacteristicsDisplayable2.php';
class Tire implements CharacteristicsDisplayable2
{
    public float $width;
    public float $height;
    public float $diameter;
    public function __construct(float $width, float $height, float $diameter)
    {
        $this->width = $width;
        $this->height = $height;
        $this->diameter = $diameter;
    }
// On vient définir, après avoir utilisé notre require_once, la fonction getCharacteristics() qui se trouve au sein du fichier CharacteristicsDisplayable
    public function getCharacteristics(): array
    {
        return [
            'width' => $this->width,
            'height' => $this->height,
            'diameter' => $this->diameter,
        ];
    }
}