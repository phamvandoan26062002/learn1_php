<?php
require_once 'pdo.php';

class ProductController
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function showCategories()
    {
        return $this->database->all();
    }

    public function createProduct($data)
    {
        $this->database->create($data);
    }

    public function deleteProduct($data)
    {
        $this->database->delete($data);
    }

    public function editProduct($data)
    {
        $this->database->edit($data);
    }
}

$productController = new ProductController($database);

$categories = $productController->showCategories();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['delete_id'])) {
        $productController->deleteProduct(array('id' => $_POST['delete_id']));
    } elseif (isset($_POST['edit_id'])) {
        // Do something for edit action
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        .container {
            margin-top: 20px;
        }

        .container-fluid h3 {
            margin-bottom: 20px;
        }

        .btn-success {
            margin-bottom: 10px;
        }

        table {
            margin-top: 20px;
        }
    </style>

</head>
<body>
<div class="container mt-3">
    <div class="container-fluid"><h3>List Category</h3></div>
    <a class="btn btn-success" href="./create.php">Create</a>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Products_Name</th>
            <th scope="col">Price</th>
            <th scope="col">Categories_id</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($categories as $category) : ?>
        <tr>
            <th scope="row"><?= $category['id'] ?></th>
            <td><?= $category['Products_Name'] ?></td>
            <td><?= $category['Price'] ?></td>
            <td><?= $category['Categories_id'] ?></td>
            <td>
                <form id="delete_<?= $category['id'] ?>" action="./delete.php" method="post">
                    <input type="hidden" value="<?= $category['id'] ?>" name="delete_id">
                    <button type="button" class="btn btn-danger" onclick="confirmDelete(<?= $category['id'] ?>)">Delete</button>
                </form>

                <form id="edit_<?= $category['id'] ?>" action="./edit.php" method="post">
                    <input type="hidden" value="<?= $category['id'] ?>" name="edit_id">
                    <button type="submit" class="btn btn-danger">Edit</button>
                </form>

            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    function confirmDelete(id) {
        let result = confirm('Are you sure?');
        if (result === true) {
            document.getElementById(`delete_${id}`).submit();
        }
    }

    function confirmEdit(id) {
        let result = confirm('Are you sure you want to edit this item?');
        if (result === true) {
            document.getElementById(`edit_${id}`).submit();
        }
    }

</script>

</body>
</html>
