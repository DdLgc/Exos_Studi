<?php
require_once 'AnimalInterface.php';

class Cat implements AnimalInterface{

    public function getSoundType(): string
    {
        return "le chat miaule ça fait Maiou ! ";
    }
}