<?php

class Car
{
    // properties either private or public or protected || called fields in some other languages
    private $name;
    private $brand;
    private $type;
    private $year;
    private $color;

    // constructor function in php
    public function __construct($name, $brand, $type, $year, $color)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->type = $type;
        $this->year = $year;
        $this->color = $color;
    }


    // methods
    public function getName()
    {

        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }



    public function getInfo()
    {
        return $this->brand . " " . $this->name . " " .  $this->type . " " . $this->year . " " . $this->color;
    }
}
