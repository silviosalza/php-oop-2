
<?php
 require_once __DIR__ . "/category.php";

class Product {
    public $name;
    public $price;
    public $category;
    public $img;

    function __construct(String $_name, Float $_price, Category $_category , $_img) 
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
        $this->img = $_img;
    }
    function getDetails() {
        return "";
    }


}





?>