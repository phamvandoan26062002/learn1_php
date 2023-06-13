<?php
// Kết nối tới cơ sở dữ liệu MySQL
$servername = "localhost";
$username = "root";
$password = "";
$database = "manager_customers";

$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

// Tạo bảng "customers"
// $sql = "CREATE TABLE IF NOT EXISTS nhanvien (
//         MANV INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//         HOTEN VARCHAR(50) NOT NULL,
//         NGVL DATE NOT NULL,
//         SODT VARCHAR(20) NOT NULL
//     )";

// if ($conn->query($sql) === TRUE) {
//     echo "Bảng 'nhanvien' đã được tạo thành công";
// } else {
//     echo "Lỗi khi tạo bảng: " . $conn->error;
// }

// Thêm khách hàng vào bảng "customers"
// $sql = "INSERT INTO nhanvien (MANV, HOTEN, NGVL, SODT) VALUES
//     (6, 'Poseidon', '2006-04-21', '541'),
//     (7, 'John Doe', '2006-04-21', '1234567890'),
//     (8, 'Jane Smith', '2006-04-21', '9876543210'),
//     (9, 'David Johnson', '2006-04-21', '4561237890'),
//     (10, 'Sarah Williams', '2006-04-21', '7894561230')";

// if ($conn->query($sql) === TRUE) {
//     echo "Thêm thành công nhân viên vào bảng 'nhanvien'";
// } else {
//     echo "Lỗi khi thêm nhân viên: " . $conn->error;
// }


// update
    
// $sql = "UPDATE nhanvien SET SODT = '10101010101' WHERE MANV = '1'";

//     if ($conn->query($sql) === TRUE) {
//         echo "Cập nhật thông tin nhân viên thành công";
//     } else {
//         echo "Lỗi khi cập nhật thông tin nhân viên: " . $conn->error;
//     }

//Delete 

// $sql = " DELETE FROM nhanvien WHERE HOTEN = 'David Johnson'";

// if ($conn->query($sql) === true) {
//     echo "Xóa thông tin nhân viên thành công";
// } else {
//     echo "Lỗi khi xóa thông tin nhân viên: " . $conn->error;
// }

//views

$sql = "SELECT * FROM nhanvien";

$result = $conn->query($sql);

if ($result === FALSE) {
    echo "Lỗi khi xem thông tin nhanvien: " . $conn->error;
} else {
    if ($result->num_rows > 0) {
       // Lặp qua từng dòng dữ liệu và hiển thị
        while ($row = $result->fetch_assoc()) {
            echo "Mã nhân viên: " . $row["MANV"] . ", | Họ tên: " . $row["HOTEN"] . ", | Ngày vào làm: " . $row["NGVL"] . ", | Số điện thoại " . $row["SODT"] . "<br>";
        }
    } else {
        echo "Không có dữ liệu trong bảng 'nhanvien'.";
    }
}

// Đóng kết nối
$conn->close();

?>