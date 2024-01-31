<?php 
    /* DEFINISCO LA CLASSE PRODOTTO */
    class Product
    {
        public $name;
        public $image;
        public $price;
        public $description;

        public function __construct($_name, $_image, $_price, $_description)
        {
            $this->name = $_name;
            $this->image = $_image;
            $this->price = $_price;
            $this->description = $_description;
        }
    }

    /* DEFINISCO LA CLASSE CATEGORIA */
    class Category
    {
        public $name;

        public function __construct($_name)
        {
            $this->name = $_name;
        }
    }

?>