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
$sql = "CREATE TABLE IF NOT EXISTS customers (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(20) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Bảng 'customers' đã được tạo thành công";
} else {
    echo "Lỗi khi tạo bảng: " . $conn->error;
}

// Thêm khách hàng vào bảng "customers"
$sql = "INSERT INTO customers (name, email, phone) VALUES
    ('Poseidon', 'poseidon@sea.oc', '541'),
    ('John Doe', 'john@example.com', '1234567890'),
    ('Jane Smith', 'jane@example.com', '9876543210'),
    ('David Johnson', 'david@example.com', '4561237890'),
    ('Sarah Williams', 'sarah@example.com', '7894561230'),
    ('Michael Brown', 'michael@example.com', '3216549870')";

if ($conn->query($sql) === TRUE) {
    echo "Thêm thành công khách hàng vào bảng 'customers'";
} else {
    echo "Lỗi khi thêm khách hàng: " . $conn->error;
}

// update
    
$sql = "UPDATE customers SET email = 'poseidon@ocean.oc' WHERE name = 'John Doe'";

    if ($conn->query($sql) === TRUE) {
        echo "Cập nhật thông tin khách hàng thành công";
    } else {
        echo "Lỗi khi cập nhật thông tin khách hàng: " . $conn->error;
    }

//Delete 

$sql = " DELETE FROM customers WHERE name = 'Michael Brown'";

if ($conn->query($sql) === true) {
    echo "Xóa thông tin khách hàng thành công";
} else {
    echo "Lỗi khi xóa thông tin khách hàng: " . $conn->error;
}

//views

$sql = "SELECT * FROM manager_customers.customers";

$result = $conn->query($sql);

if ($result === FALSE) {
    echo "Lỗi khi xem thông tin khách hàng: " . $conn->error;
} else {
    if ($result->num_rows > 0) {
        // Lặp qua từng dòng dữ liệu và hiển thị
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . ", Name: " . $row["name"] . ", Email: " . $row["email"] . ", Phone: " . $row["phone"] . "<br>";
        }
    } else {
        echo "Không có dữ liệu trong bảng 'customers'.";
    }
}

// Đóng kết nối
$conn->close();
?>