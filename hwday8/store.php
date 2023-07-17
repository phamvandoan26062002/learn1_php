<?php
require_once 'pdo.php';
require_once 'helper.php';

class CategoryManager {
    private $database;

    public function __construct($database) {
        $this->database = $database;
    }

    public function createCategory($category) {
        $this->database->create($category);
    }
}

$request = $_POST;

if (isset($request['Products_Name']) && isset($request['Price']) && isset($request['Categories_id'])) {
    $category = [
        'Products_Name' => $request['Products_Name'],
        'Price' => $request['Price'],
        'Categories_id' => $request['Categories_id']
    ];

    $categoryManager = new CategoryManager($database);
    $categoryManager->createCategory($category);
    redirectHome();
} else {
    die('Invalid request');
}
?>
