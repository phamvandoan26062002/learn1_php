<?php
// Nhúng file kết nối cơ sở dữ liệu
include "db_connects.php";

// Kiểm tra xem có id khách hàng được chuyển từ trang edit_profile.php hay không
if (isset($_GET['id'])) {
    $id_khach_hang = $_GET['id'];
} else {
    echo "Không có dữ liệu.";
    exit; // Kết thúc luôn nếu không có id
}

// Lấy thông tin từ form chỉnh sửa
$ten_nha_thuoc = $_POST["ten_nha_thuoc"];
$nguoi_lien_he = $_POST["nguoi_lien_he"];
$so_dien_thoai = $_POST["so_dien_thoai"];
$dia_chi = $_POST["dia_chi"];
$so_GPP = $_POST["so_GPP"];
$ngay_cap = $_POST["ngay_cap"];
$noi_cap = $_POST["noi_cap"];

// Kết nối tới cơ sở dữ liệu
$conn = connectDB();

// Truy vấn cập nhật thông tin cho khách hàng dựa vào id
$sql = "UPDATE info_customer SET 
            ten_nha_thuoc = '$ten_nha_thuoc',
            nguoi_lien_he = '$nguoi_lien_he',
            so_dien_thoai = '$so_dien_thoai',
            dia_chi = '$dia_chi',
            so_GPP = '$so_GPP',
            ngay_cap = '$ngay_cap',
            noi_cap = '$noi_cap'
        WHERE id = $id_khach_hang";

if ($conn->query($sql) === TRUE) {
    echo "Cập nhật thông tin thành công.";
} else {
    echo "Có lỗi xảy ra khi cập nhật thông tin: " . $conn->error;
}

// Đóng kết nối
$conn->close();
?>
