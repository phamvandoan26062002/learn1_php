<?php
    require_once 'pdo.php';
    if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['category_id'])) {
        $data = array(
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'category_id' => $_POST['category_id']
        );
        $database->create($data);
    }
    header("Location: index.php");
?>
