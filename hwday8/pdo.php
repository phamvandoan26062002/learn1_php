<?php
$DB_TYPE = 'mysql';
$DB_HOST = 'localhost';
$DB_NAME = 'test';
$USER = 'root';
$PW = '';

try {
    $connection = new PDO("$DB_TYPE:host=$DB_HOST;dbname=$DB_NAME", $USER, $PW);
    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}

function prepareSQL($sql, $data = array()) {
    global $connection;
    $stmt = $connection->prepare($sql);
    $stmt->execute($data);
    return $stmt;
}


function all() {
    $sql = "SELECT * FROM products";
    $stmt = prepareSQL($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

function create($data) {
    $sql = "INSERT INTO products (Products_Name, Price, Categories_id) VALUES (:Products_Name, :Price, :Categories_id)";
    $filteredData = array(
        'Products_Name' => $data['Products_Name'],
        'Price' => $data['Price'],
        'Categories_id' => $data['Categories_id']
    );
    prepareSQL($sql, $filteredData);
}


function delete($data) {
    $sql = "DELETE FROM products WHERE id = :id";
    prepareSQL($sql, $data);
}

function edit($data) {
    $sql = "UPDATE products SET Products_Name = :Products_Name, Price = :Price, Categories_id = :Categories_id WHERE id = :id";
    prepareSQL($sql, $data);
}
