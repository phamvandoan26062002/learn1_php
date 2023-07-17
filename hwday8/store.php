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

$DB_TYPE = 'mysql';
$DB_HOST = 'localhost';
$DB_NAME = 'test';
$USER = 'root';
$PW = '';

$database = new Database($DB_TYPE, $DB_HOST, $DB_NAME, $USER, $PW);

$request = $_POST;

if (isset($request['Products_Name']) && isset($request['Price']) && isset($request['Categories_id'])) {
    $category = [
        'Products_Name' => $request['Products_Name'],
        'Price' => $request['Price'],
        'Categories_id' => $request['Categories_id']
    ];

    $categoryManager = new CategoryManager($database);
    $categoryManager->createCategory($category);
    RedirectHelper::redirectHome();
} else {
    die('Invalid request');
}
?>
