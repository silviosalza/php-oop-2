<?php

require_once __DIR__ . "/product.php";

class Toy extends Product {

    public $material;

    function __construct(String $_name, Float $_price, Category $_category , $_img, $_material)
    {
        parent::__construct( $_name, $_price, $_category, $_img);
        $this->material = $_material;
    }
}




?>