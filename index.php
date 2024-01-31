<?php 
    /* DEFINISCO LA CLASSE PRODOTTO */
    class Product
    {
        public $name;
        public $image;
        public $price;
        public $description;

        public function __construct($name, $image, $price, $description)
        {
            $this->name = $_name;
            $this->image = $_image;
            $this->price = $_price;
            $this->description = $_description;
        }
    }
?>