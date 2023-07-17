<?php
    require_once "pdo.php";
 
    $products = $database->all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Producst</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <div>
            <h3>List Products</h3>
            <a href="create.php" class="btn btn-success" style="margin-right: 5px;">Create</a>
        </div>
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">STT</th>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $i = 1;
                foreach($products as $products):
            ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $products['id'] ?></td>
                <td><?= $products['name'] ?></td>
                <td><?= $products['price'] ?></td>
                <td><?= $products['category'] ?> </td>
                <td>
                    <form id="delete_<?= $products['id']?>" action="delete.php" method="POST" style="display:flex">
                        <a href="./edit.php?id=<?= $products['id']?>" class="btn btn-dark" style="margin-right: 5px">Edit</a>
                        <input type="hidden" value="<?= $products['id'] ?>" name="id">
                        <a class="btn btn-dark" onclick="confirmDelete(<?= $products['id'] ?>)">Delete</a>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>  
    </div>
<script>
    function confirmDelete(id) {
        let result = confirm('Are you sure?');
        if (result === true) {
            console.log(id);
            document.getElementById(`delete_${id}`).submit();
        }
    }
</script>
</body>
</html>
