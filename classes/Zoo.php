<?php


class Zoo
{

    private $animals = [];

    public function addAnimal($animals){

        //$animals .= $this->animals;
        $this->animals[] .= $animals;

    }




    public function listAnimals(){

        $list = [];

        return $this->animals;

    }

    public function makeAllSounds(){


    }



}