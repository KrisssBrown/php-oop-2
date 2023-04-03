<?php

require_once __DIR__ . "/product.php";

class Game extends Product{

    protected string $material;
    protected string $shape;
    protected string $type;

    function __construct($_category, $_title, $_description, $_quantity, $_price, $_material, $_shape, $_type){
        
        parent::__construct($_category, $_title, $_description, $_quantity, $_price);

        $this->material = $_material;
        $this->shape = $_shape;
        $this->type = $_type;
    }
}