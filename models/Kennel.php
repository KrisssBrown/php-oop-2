<?php

require_once __DIR__ . "/product.php";


class Kennel extends Product{

    protected string $material;
    protected string $shape;
    protected string $tissue;
    protected string $padding;

    function __construct($_category, $_title, $_description, $_quantity, $_price, $_material, $_shape, $_tissue, $_padding){

        parent::__construct($_category, $_title, $_description, $_quantity, $_price);

        $this->material = $_material;
        $this->shape = $_shape;
        $this->tissue = $_tissue;
        $this->padding = $_padding;
    }
}