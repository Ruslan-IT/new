<?php


include 'classes/SoundMakerInterface.php';
include 'classes/FeederInterface.php';
include 'classes/Animal.php';
include 'classes/Cat.php';
include 'classes/Zoo.php';
include 'classes/Dog.php';



$zoo = new Zoo();
$zoo->addAnimal(new Cat('Мурзик', 'Домашний кот'));
$zoo->addAnimal(new Dog('Бобик', 'Дворняжка'));


print_r($zoo->listAnimals());
//print_r($zoo->makeAllSounds());















