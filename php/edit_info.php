<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PharmaDI - Chỉnh sửa thông tin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./images_of_Đoan/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./edit_info.css">
</head>
<body>
    <?php require "./header.php"; ?>
    <!-- CONTENT  -->
    <div class="wrapper">
        <div class="container">
            <div class="header">
                <h4>CHỈNH SỬA THÔNG TIN</h4>
            </div>
            <div class="info">
                <?php
                // Nhúng file kết nối cơ sở dữ liệu
                include "db_connects.php";

                // Kiểm tra xem có id khách hàng được chuyển từ trang profile hay không
                if (isset($_GET['id'])) {
                    $id_khach_hang = $_GET['id'];
                } else {
                    echo "Không có dữ liệu.";
                    exit; // Kết thúc luôn nếu không có id
                }

                // Kết nối tới cơ sở dữ liệu
                $conn = connectDB();

                // Truy vấn dữ liệu từ cơ sở dữ liệu dựa vào id khách hàng
                $sql = "SELECT * FROM info_customer WHERE id = $id_khach_hang";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Hiển thị thông tin của khách hàng cần chỉnh sửa
                    $row = $result->fetch_assoc();

                    // Form chỉnh sửa thông tin
                    echo '<form action="update_info.php?id=' . $id_khach_hang . '" method="POST">';
                    echo '<label for="ten_nha_thuoc"><strong class="label">Tên nhà thuốc</strong></label>';
                    echo '<input type="text" id="ten_nha_thuoc" name="ten_nha_thuoc" value="' . $row["ten_nha_thuoc"] . '"><br>';
                    echo '<label for="nguoi_lien_he"><strong class="label">Người liên hệ</strong></label>';
                    echo '<input type="text" id="nguoi_lien_he" name="nguoi_lien_he" value="' . $row["nguoi_lien_he"] . '"><br>';
                    echo '<label for="so_dien_thoai"><strong class="label">Số điện thoại</strong></label>';
                    echo '<input type="text" id="so_dien_thoai" name="so_dien_thoai" value="' . $row["so_dien_thoai"] . '"><br>';
                    echo '<label for="dia_chi"><strong class="label">Địa chỉ</strong></label>';
                    echo '<input type="text" id="dia_chi" name="dia_chi" value="' . $row["dia_chi"] . '"><br>';
                    echo '<label for="so_GPP"><strong class="label">Số GPP</strong></label>';
                    echo '<input type="text" id="so_GPP" name="so_GPP" value="' . $row["so_GPP"] . '"><br>';
                    echo '<label for="ngay_cap"><strong class="label">Ngày cấp</strong></label>';
                    echo '<input type="text" id="ngay_cap" name="ngay_cap" value="' . $row["ngay_cap"] . '"><br>';
                    echo '<label for="noi_cap"><strong class="label">Nơi cấp</strong></label>';
                    echo '<input type="text" id="noi_cap" name="noi_cap" value="' . $row["noi_cap"] . '"><br>';
                    echo '<div class="button-container">';
                    echo '<input type="submit" class="btn_cancel" value="Hủy bỏ" formaction="profile.php">';
                    echo '<input type="submit" class="btn_update" value="Chỉnh sửa">';
                    echo '</div>';
                    echo '</form>';
                } else {
                    echo "Không tìm thấy thông tin khách hàng.";
                }

                // Đóng kết nối
                $conn->close();
                ?>
            </div>
        </div>
    </div>

    <!-- FOOTER  -->
    <?php require "./footer.php"; ?>

</body>
</html>
