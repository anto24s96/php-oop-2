<?php 
    /* DEFINISCO LA CLASSE PRODOTTO */
    class Product
    {   
        public $brand;
        public $name;
        public $image;
        public $price;
        public $description;

        public function __construct($_brand, $_name, $_image, $_price, $_description)
        {   
            $this->brand = $_brand;
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

    /* DEFINISCO LA SUB CLASSE CIBO */
    class Food extends Product
    {
        public $food_type;
        public $category;

        public function __construct($_brand, $_name, $_image, $_price, $_description, $_category, $_food_type)
        {
            parent::__construct($_brand, $_name, $_image, $_price, $_description, $_category);
            $this->food_type = $_food_type;
            $this->category = $_category;

        }
    }

    /* DEFINISCO LA SUB CLASSE GIOCO */
    class Toy extends Product
    {
        public $material;
        public $category;

        public function __construct($_brand, $_name, $_image, $_price, $_description, $_category, $_material)
        {
            parent::__construct($_brand, $_name, $_image, $_price, $_description, $_category);
            $this->material = $_material;
            $this->category = $_category;
        }
    }

    /* DEFINISCO LA SUBCLASSE ACCESSORI */
    class Accessories extends Product
    {
        public $category;

        public function __construct($_brand, $_name, $_image, $_price, $_description, $_category)
        {
            parent::__construct($_brand, $_name, $_image, $_price, $_description, $_category);
            $this->category = $_category;
        }
    }


?>