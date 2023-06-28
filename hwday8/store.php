<?php
require_once 'pdo.php';
require_once 'helper.php';

$request = $_POST;

$category = [
    'Products_Name' => $request['Products_Name'],
    'Price' => $request['Price'],
    'Categories_id' => $request['Categories_id']
];

create($category);
redirectHome();
?>