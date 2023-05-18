<?php

 require_once __DIR__ . "/category.php";
 require_once __DIR__ . "/product.php";
 require_once __DIR__ . "/food.php";
 require_once __DIR__ . "/toy.php";

 $dog_category = new Category("dog" ,"icon");
 $cat_category = new Category("cat" ,"icon");


 $my_cat = new Food("Mio gatto", 2 , $cat_category , "img", "2023-05-31");
 $collar = new Product("collare", 3, $dog_category,"img");
 $duck = new Toy("Paperella", 10, $dog_category, "img", "gomma");








?>