<?php
require_once 'pdo.php';

class ProductManager {
    private $database;

    public function __construct($database) {
        $this->database = $database;
    }

    public function createProduct($data) {
        $this->database->create($data);
    }
}

$data = [
    'prodId' => '',
    'prodName' => $_POST['name'],
    'prodPrice' => $_POST['price'],
    'cateId' => $_POST['cateId']
];

$productManager = new ProductManager($database);
$productManager->createProduct($data);
header("Location: http://localhost/hoc.php/product/index.php");
?>
