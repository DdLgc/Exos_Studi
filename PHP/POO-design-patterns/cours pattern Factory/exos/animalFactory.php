<?php 

class AnimalFactory {

    public $animal;

    public static function load($animal){
        switch($animal){
            case 'cat':
                return new Cat();
                break;
            case 'dog':
                return new Dog();
                break;
            case 'horse':
                return new Horse();
        }
    }
}
