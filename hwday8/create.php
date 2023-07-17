<!doctype html>
<html lang="en">
<head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style>
        .container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
        }
        
        h3 {
            margin-top: 0;
        }
        
        .form-label {
            font-weight: bold;
        }
        
        .form-control {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        .btn-primary,
        .btn-success {
            padding: 8px 16px;
            border-radius: 4px;
            border: none;
            color: #fff;
        }
        
        .btn-primary {
            background-color: #007bff;
        }
        
        .btn-success {
            background-color: #28a745;
        }
        
        .btn-primary:hover,
        .btn-success:hover {
            opacity: 0.8;
        }
        
        .form-group {
            margin-bottom: 20px;
            margin-top: 20px;
        }
        
    </style>
</head>
<body>
<div class="container mt-3">
    <div class="container-fluid"><h3>Create Category</h3></div>
    <a href="./index.php" class="btn btn-primary">Back</a>
    <form method="POST" action="./store.php">
        <div class="form-group">
            <label for="" class="form-label">Name</label>
            <input required type="text" class="form-control" name="Products_Name" placeholder="Enter name ...">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Price</label>
            <input required type="text" class="form-control" name="Price" placeholder="Enter price ...">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Category_id</label>
            <select name="Categories_id" class="form-select">
                <?php
           
                $conn = mysqli_connect('localhost', 'root', '', 'test');
                if (!$conn) {
                    die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
                }
                
                
                $query = "SELECT id FROM categories";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                  
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . $row['id'] . "'>" . $row['id'] . "</option>";
                    }
                }
                
              
                mysqli_close($conn);
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
