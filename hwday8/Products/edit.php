<?php
    require_once "pdo.php";
    $categories = $database->getAllCategories();
    
    if (isset($_GET['id'])) {
        $product = $database->select($_GET['id'])[0];
    } else {
        die('Invalid request');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chỉnh sửa sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <a href="index.php" class="btn" style="margin-right: 5px"> < Back</a>
        <h3>Update Product</h3>
        <form action="action-update.php?id=<?= $product['id'] ?>" method="POST">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input required type="text" class="form-control" name="name" value="<?= $product['name'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input required type="text" class="form-control" name="price" value="<?= $product['price'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Category</label>
            <select class="form-select" aria-label="Default select example" name="category_id">
                <option selected value="<?= $product['category_id'] ?>"><?= $product['category'] ?></option>
                <?php 
                    foreach($categories as $category) {
                        if($category['id'] == $product['category_id'])
                            continue;
                        else {
                            echo "<option value='{$category['id']}'>{$category['name']}</option>";
                        }
                    }
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</body>
</html>
