<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PharmaDI</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./images_of_Đoan/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./Brand.css">
</head>
<body>
    <?php require "./header.php"; ?>
    <!-- CONTENT  -->
    <div class="breadcrumb0">
        <ul class="breadcrumb">
            <li><a href="#" class="a1">Trang chủ</a></li>
            <li><a href="#" class="a2">Thương hiệu</a></li>
        </ul>
    </div>


        <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "test";

        $conn = mysqli_connect($host, $username, $password, $database);

        if (!$conn) {
            die("Kết nối thất bại: " . mysqli_connect_error());
        }

        $sql = "SELECT logo_url FROM brands";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo '<div class="logo-slider">';
        echo '<p>Danh sách thương hiệu</p>';
        while ($row = mysqli_fetch_assoc($result)) {
            $imageURL = $row['logo_url'];
            echo '<div class="brands">';
            echo '<img   src="' . $imageURL . '" alt="Logo">';
            echo '</div>';
        }
            echo '</div>';
        }
        mysqli_close($conn);
        ?>
    

    <div class="brand-container">
        <?php
        $conn = mysqli_connect($host, $username, $password, $database);

        if (!$conn) {
            die("Kết nối thất bại: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM brands";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $imageURL = $row['logo_url'];
                $description = $row['description'];
                $productCount = $row['product_count'];

                echo '<div class="brand">';
                echo '<img src="' . $imageURL . '" alt="Logo">';
                echo '<p>' . $description . '</p>';
                echo '<p class="productCount">' . $productCount . ' sản phẩm</p>';
                echo '<a href = ""> Xem sản phẩm > </a>';
                echo '</div>';
            }
        } else {
            echo "Không có thông tin hãng.";
        }

        mysqli_close($conn);
        ?>
    </div>

    <!-- FOOTER  -->
    <?php require "./footer.php"; ?>

</body>
</html>
