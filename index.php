<?php
class Product {
    protected $name;
    protected $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getInfo() {
        return "Producto: $this->name, Precio: $this->price USD";
    }
}

class Book extends Product {
    private $author;

    public function __construct($name, $price, $author) {
        parent::__construct($name, $price);
        $this->author = $author;
    }

    public function getInfo() {
        return parent::getInfo() . ", Autor: $this->author";
    }
}

class Electronic extends Product {
    private $brand;

    public function __construct($name, $price, $brand) {
        parent::__construct($name, $price);
        $this->brand = $brand;
    }

    public function getInfo() {
        return parent::getInfo() . ", Marca: $this->brand";
    }
}

$book = new Book("El Principito", 15, "Antoine de Saint-Exupéry");
$phone = new Electronic("iPhone 16", 999, "Apple");

echo "Libro: <br>" . $book->getInfo();
echo "<br>";
echo "<br>";
echo "<br>";
echo "Electrónico: <br>" . $phone->getInfo();
?>
