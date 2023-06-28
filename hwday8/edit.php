<?php
require_once 'pdo.php';

if (isset($_POST['edit_id'])) {
    $id = $_POST['edit_id'];

    // Truy vấn dữ liệu sản phẩm dựa trên ID
    $sql = "SELECT * FROM products WHERE id = :id";
    $stmt = prepareSQL($sql, array('id' => $id));
    $stmt->execute();
    $product = $stmt->fetch();

    if (!$product) {
        die('Product not found');
    }
} else {
    die('Invalid request');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = array(
        'id' => $_POST['edit_id'],
        'Products_Name' => $_POST['Products_Name'],
        'Price' => $_POST['Price'],
        'Categories_id' => $_POST['Categories_id']
    );

    // Cập nhật thông tin sản phẩm
    edit($data);

    // Chuyển hướng trở lại trang danh sách sau khi cập nhật thành công
    header('Location: ./index.php');
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>

    <form action="" method="POST">
        <input type="hidden" name="edit_id" value="<?= $product['id'] ?>">
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
