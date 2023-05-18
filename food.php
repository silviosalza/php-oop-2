<?php

require_once __DIR__ . "/category.php";
require_once __DIR__ . "/product.php";



class Food extends Product{

    public $expire_date;

    function __construct($_name, $_price, Category $_category, $_img, $_expire_date)
    {
        parent::__construct($_name, $_price, $_category, $_img);
        $this->expire_date = $_expire_date;
    }



}









?>