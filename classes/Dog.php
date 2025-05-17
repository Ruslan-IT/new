<?php


class Dog extends Animal implements SoundMakerInterface, FeederInterface
{

    public function __construct($name, $species)
    {
        parent::__construct($name, $species);
    }


    public function eat($food)
    {
        return 'Собака ест'.$food;
    }

    public function makeSound()
    {
       return 'Гав';
    }
}