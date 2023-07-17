<?php 
require_once "pdo.php";

class ProductManager {
    private $database;

    public function __construct($database) {
        $this->database = $database;
    }

    public function updateProduct($data) {
        $this->database->update($data['prodName'], $data['prodPrice'], $data['cateId'], $data['id']);
    }
}

$data = [
    'prodName' => $_POST['name'],
    'prodPrice' => $_POST['price'],
    'cateId' => $_POST['cateId'],
    'id' => $_GET['id']
];

$productManager = new ProductManager($database);
$productManager->updateProduct($data);
header("Location: http://localhost/learn_php/product/index.php");
?>
