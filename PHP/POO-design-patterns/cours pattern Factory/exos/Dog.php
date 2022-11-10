<?php 
require_once 'AnimalInterface.php';

class Dog implements AnimalInterface{

    public function getSoundType(): string
    {
        return "le chien aboie et ça fait waf ! ";
    }
}