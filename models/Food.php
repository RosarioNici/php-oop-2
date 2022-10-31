<?php

require_once __DIR__ . '/products.php';


class Food extends Product {

    public $type = 'Food';
    public $ingredients = [];
    public $weight = 0;

}



?>