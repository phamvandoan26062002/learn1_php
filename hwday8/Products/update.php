<?php
require_once 'pdo.php';
require_once 'helper.php';

class CategoryManager {
    private $database;

    public function __construct($database) {
        $this->database = $database;
    }

    public function updateCategory($category) {
        $this->database->update($category['name'], $category['id']);
    }
}

$request = $_POST;

if (isset($request['name']) && isset($request['id'])) {
    $category = [
        'name' => $request['name'],
        'id' => $request['id']
    ];

    $categoryManager = new CategoryManager($database);
    $categoryManager->updateCategory($category);
    redirectHome();
} else {
    die('Invalid request');
}
?>
