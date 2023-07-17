<?php
    require_once "pdo.php";
    $categories = $database->all();
    
    if (isset($_GET['id'])) {
        $products = $database->select($_GET['id'])[0];
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
        <h3>Update Products</h3>
        <form action="action-update.php?id=<?= $products['id'] ?>" method="POST">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input required type="text" class="form-control" name="Products_Name" value="<?= $products['Products_Name'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input required type="text" class="form-control" name="Price" value="<?= $products['Price'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Category</label>
            <select class="form-select" aria-label="Default select example" name="Category_id">
                <option selected value="<?= $products['Categories_id'] ?>"><?= $products['Categories_id'] ?></option>
                <?php 
                    foreach($Categories as $Category) {
                        if($Category['id'] == $products['Category_id'])
                            continue;
                        else {
                            echo "<option value='{$Category['id']}'>{$Category['name']}</option>";
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
