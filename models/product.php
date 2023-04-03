<?php


class Product {
    protected string $category;
    protected string $title;
    protected string $description;
    protected int $quantity;
    protected float $price;


    function __construct($_category, $_title, $_description, $_quantity, $_price){
        
        $this->category = $_category;
        $this->title = $_title;
        $this->description = $_description;
        $this->quantity = $_quantity;
        $this->price = $_price; 
    }
    
}
