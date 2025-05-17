<?php


class Cat extends Animal implements SoundMakerInterface, FeederInterface {


    public function __construct($name, $species)
    {
        parent::__construct($name, $species);
    }

    public function makeSound()
    {
        return 'Мяу';
    }


    public function eat($food)
    {
        return 'Кот ест '.$food;
    }


    public function purr(){
        return 'Муррррр';
    }
}