<?php

class Database
{
    private $connection;

    public function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $USER, $PW)
    {
        try {
            $this->connection = new PDO("$DB_TYPE:host=$DB_HOST;dbname=$DB_NAME", $USER, $PW);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
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
        $sql = "INSERT INTO products (name, price, category_id) VALUES (:name, :price, :ca_id)";
        $stmt = $this->prepareSQL($sql, $data);
        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM products WHERE id = :id";
        $stmt = $this->prepareSQL($sql, array('id' => $id));
        $stmt->execute();
    }

    public function update($name, $price, $ca_id, $id)
    {
        $sql = "UPDATE products SET name = :name, price = :price, category_id = :ca_id WHERE id = :id";
        $stmt = $this->prepareSQL($sql, array(
            'name' => $name,
            'price' => $price,
            'ca_id' => $ca_id,
            'id' => $id
        ));
        $stmt->execute();
    }

    public function select($id)
    {
        $sql = "SELECT * FROM products WHERE id = :id";
        $stmt = $this->prepareSQL($sql, array('id' => $id));
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

$DB_TYPE = 'mysql';
$DB_HOST = 'localhost';
$DB_NAME = 'test';
$USER = 'root';
$PW = '';

$database = new Database($DB_TYPE, $DB_HOST, $DB_NAME, $USER, $PW);

?>
