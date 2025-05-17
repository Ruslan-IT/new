<?php


class Animal
{

    protected $name;
    protected $species;

    public function __construct($name, $species)
    {
        $this->name = $name;
        $this->species = $species;
    }


    public function getSpecies()
    {
        return $this->species;
    }


    public function getName()
    {
        return $this->name;
    }

    public function sleep(){
        return 'zzzzzzzzzzz';
    }


}