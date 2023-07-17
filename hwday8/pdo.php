<?php

class Database
{
    private $connection;

    public function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $USER, $PW)
    {
        try {
            $this->connection = new PDO("$DB_TYPE:host=$DB_HOST;dbname=$DB_NAME", $USER, $PW);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function prepareSQL($sql, $data = array())
    {
        $stmt = $this->connection->prepare($sql);
        $stmt->execute($data);
        return $stmt;
    }

    public function all()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->prepareSQL($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function create($data)
    {
        $sql = "INSERT INTO products (Products_Name, Price, Categories_id) VALUES (:Products_Name, :Price, :Categories_id)";
        $filteredData = array(
            'Products_Name' => $data['Products_Name'],
            'Price' => $data['Price'],
            'Categories_id' => $data['Categories_id']
        );
        $this->prepareSQL($sql, $filteredData);
    }

    public function delete($data)
    {
        $sql = "DELETE FROM products WHERE id = :id";
        $this->prepareSQL($sql, $data);
    }

    public function edit($data)
    {
        $sql = "UPDATE products SET Products_Name = :Products_Name, Price = :Price, Categories_id = :Categories_id WHERE id = :id";
        $this->prepareSQL($sql, $data);
    }
}

$DB_TYPE = 'mysql';
$DB_HOST = 'localhost';
$DB_NAME = 'test';
$USER = 'root';
$PW = '';

$database = new Database($DB_TYPE, $DB_HOST, $DB_NAME, $USER, $PW);

?>

