<?php
    require_once 'pdo.php';
    if (isset($_POST['id'])) {
        $database->delete($_POST['id']);
    }
    header("Location: index.php");
?>
