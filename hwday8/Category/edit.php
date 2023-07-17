<?php
require_once 'pdo.php';

class EditProduct
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getProduct($id)
    {
        $sql = "SELECT * FROM products WHERE id = :id";
        $stmt = $this->database->prepareSQL($sql, array('id' => $id));
        $stmt->execute();
        $product = $stmt->fetch();

        if (!$product) {
            die('Product not found');
        }

        return $product;
    }

    public function updateProduct($data)
    {
        $this->database->edit($data);
    }
}

$editProduct = new EditProduct($database);

$id = $_GET['edit_id'] ?? null;

if (!$id) {
    die('Invalid request');
}

$product = $editProduct->getProduct($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = array(
        'id' => $_POST['edit_id'],
        'Products_Name' => $_POST['Products_Name'],
        'Price' => $_POST['Price'],
        'Categories_id' => $_POST['Categories_id']
    );

    $editProduct->updateProduct($data);

    header('Location: ./index.php');
    exit();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>

    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <div>
            <label for="product-name">Product Name:</label>
            <input type="text" id="product-name" name="Products_Name" value="<?= $product['Products_Name'] ?>">
        </div>
        <div>
            <label for="product-price">Price:</label>
            <input type="number" id="product-price" name="Price" value="<?= $product['Price'] ?>">
        </div>
        <div>
            <label for="category-id">Category ID:</label>
            <input type="number" id="category-id" name="Categories_id" value="<?= $product['Categories_id'] ?>">
        </div>
        <button type="submit">Update</button>
    </form>
</body>
</html>
