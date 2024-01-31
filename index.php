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

    /* DEFINISCO LE ISTANZE DELLA CLASSE CATEGORIA */
    $dog = new Category('Cane');
    $cat = new Category('Gatto');
    $bird = new Category('Uccelli');
    $fish = new Category('Pesci');

    /* DEFINISCO LE ISTANZE DEI PRODOTTI */
    $product_1 = new Food('Royal Canin','Mini Adult','https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', 40.99, 'Alimento completo per cani adulti di piccola taglia (fino a 10kg) - Oltre 10 mesi di età', $dog, 'Crocchette secche');
    $product_2 = new Food('Almo Nature','Holistic Medium Adult con Pollo','https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 35.90,'Contiene carne o pesce freschi per un alta appetibilità.', $dog, 'Crocchette');
    $product_3 = new Food('Almo Nature','Cat Daily Lattina','https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 4.99,'Alimento umido in lattina, per gatti adulti.', $cat, 'Umido');
    $product_4 = new Food('Tetra','Mangime per Pesci Guppy in Fiocchi','https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 2.99,'Fiocchi appositamente formulati per soddisfare le esigenze nutrizionali dei pesci guppy e altri pesci vivipari.', $fish, 'Fiocchi');
    $product_5 = new Accessories('Ferplast','Voliera Wilma','https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg',389.99,'Una raffinata e spaziosa voliera per canarini.', $bird);
    $product_6 = new Accessories('Tetra','Cartucce Filtranti per Filtro EasyCrystal','https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg',7.99, "Per un'acqua cristallina e sana, innovative cartucce filtranti.", $fish);
    $product_7 = new Toy('Kong','Classic','https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg',3.99,'Salta e rimbalza di qua e di là, soddisfa il bisogno di masticare e di giocare del cane', $dog,'Plastica');
    $product_8 = new Toy('Trixie','Topini di peluche','https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 2.49, 'Gioco per gatti Topini peluche, un grande classico per il divertimento di Micio!', $cat ,'Peluche');


    /* CREO DEGLI ARRAY DIVERSI PER CATEGORIA CON ALL'INTERNO I PRODOTTI */
    $products_food = [$product_1, $product_2, $product_3, $product_4];
    $products_accessories = [$product_5, $product_6];
    $products_toy = [$product_7, $product_8];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animals E-Commerce</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-3 text-center fw-bolder">Animals E-Commerce</h1>
            </div>
        </div>
        <div class="row">
            <h1 class="fw-bolder">Food</h1>
            <?php foreach($products_food as $food) { ?>
                <div class="col-4 py-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $food->image ?>" alt="image" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title text-center"><?php echo $food->name ?></div>
                            <div class="card-text">Descrizione: <?php echo $food->description ?></div>
                            <div class="card-text"><?php echo $food->food_type ?></div>
                            <div class="card-text">Prezzo: <?php echo $food->price ?>€</div>
                        </div>
                    </div>                    
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <h1 class="fw-bolder">Toy</h1>
            <?php foreach($products_toy as $toy) { ?>
                <div class="col-4 py-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $toy->image ?>" alt="image" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title text-center"><?php echo $toy->name ?></div>
                            <div class="card-text">Descrizione: <?php echo $toy->description ?></div>
                            <div class="card-text"><?php echo $toy->material ?></div>
                            <div class="card-text">Prezzo: <?php echo $toy->price ?>€</div>
                        </div>
                    </div>                    
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <h1 class="fw-bolder">Accessories</h1>
            <?php foreach($products_accessories as $accessories) { ?>
                <div class="col-4 py-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $accessories->image ?>" alt="image" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title text-center"><?php echo $accessories->name ?></div>
                            <div class="card-text"> Descrizione: <?php echo $accessories->description ?></div>
                            <div class="card-text">Prezzo: <?php echo $accessories->price ?>€</div>
                        </div>
                    </div>                    
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>