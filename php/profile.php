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
    <link rel="stylesheet" href="./profile.css">
</head>
<body>
    <?php require "./header.php"; ?>
    <!-- CONTENT  -->
    <div class="wrapper">
        <div class="container">
            <div class="header">
                <h4>THÔNG TIN TÀI KHOẢN</h4>
                <a href="edit_info.php" class="editButton">Sửa thông tin</a>
            </div>
            <div class="info">
                <?php

                include "db_connects.php";

                $conn = connectDB();

                $sql = "SELECT * FROM info_customer LIMIT 1";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo "<p><strong class='label'>Tên nhà thuốc</strong> <span class='value'>" . $row["ten_nha_thuoc"] . "</span></p>";
                    echo "<p><strong class='label'>Người liên hệ</strong> <span class='value'>" . $row["nguoi_lien_he"] . "</span></p>";
                    echo "<p><strong class='label'>Số điện thoại</strong> <span class='value'>" . $row["so_dien_thoai"] . "</span></p>";
                    echo "<p><strong class='label'>Địa chỉ</strong> <span class='value'>" . $row["dia_chi"] . "</span></p>";
                    echo "<p><strong class='label'>Số GPP</strong> <span class='value'>" . $row["so_GPP"] . "</span></p>";
                    echo "<p><strong class='label'>Ngày cấp</strong> <span class='value'>" . $row["ngay_cap"] . "</span></p>";
                    echo "<p><strong class='label'>Nơi cấp</strong> <span class='value'>" . $row["noi_cap"] . "</span></p>";
                } else {
                    echo "Không có dữ liệu.";
                }

                $conn->close();
                ?>
            </div>
        </div>
    </div>

    <!-- FOOTER  -->
    <?php require "./footer.php"; ?>

</body>
</html>
