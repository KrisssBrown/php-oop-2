<?php

require_once __DIR__. "/product.php";

class Food extends Product{

    protected bool $hasMeet;
    protected bool $hasVegetables;
    protected bool $isDry;

    function __construct($_category, $_title, $_description, $_quantity, $_price, $_hasMeet, $_hasVegetables, $_isDry){

        parent::__construct($_category, $_title, $_description, $_quantity, $_price);
        
        $this->hasMeet = $_hasMeet;
        $this->hasVegetables = $_hasVegetables;
        $this->isDry = $_isDry;
    }

}