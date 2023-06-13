<?php
// Kết nối tới cơ sở dữ liệu MySQL
$servername = "localhost";
$username = "root";
$password = "";
$database = "manager_customers";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Thêm khách hàng vào bảng "customers"
    // $stmt = $conn->prepare('INSERT INTO customers (name, email, phone) VALUES (?, ?, ?)');

    // $customers = array(
    //     array('Poseidon1', '1poseidon@sea.oc', '541'),
    //     array('John Doe1', '1john@example.com', '1234567890'),
    //     array('Jane Smith1', '1jane@example.com', '9876543210'),
    //     array('David Johnson1', '1david@example.com', '4561237890'),
    //     array('Sarah Williams1', '1sarah@example.com', '7894561230'),
    //     array('Michael Brown1', '1michael@example.com', '3216549870')
    // );

    // foreach ($customers as $customer) {
    //     $stmt->execute($customer);
    // }

    // echo "Thêm thành công khách hàng vào bảng 'customers'";

    // Update thông tin khách hàng
    // $stmt = $conn->prepare('UPDATE customers SET email = ? WHERE name = ?');
    // $stmt->execute(['newemail@example.com', 'John Doe1']);
    // echo "Cập nhật thông tin khách hàng thành công";

    // Xóa thông tin khách hàng
    $stmt = $conn->prepare('DELETE FROM customers WHERE name = ?');
    $stmt->execute(['Michael Brown1']);
    echo "Xóa thông tin khách hàng thành công";

    // Hiển thị danh sách khách hàng
    // $stmt = $conn->query('SELECT * FROM customers');
    // $customers = $stmt->fetchAll();

    // if (count($customers) > 0) {
    //     echo "Danh sách khách hàng:<br>";
    //     foreach ($customers as $customer) {
    //         echo "ID: " . $customer['id'] . ", Name: " . $customer['name'] . ", Email: " . $customer['email'] . ", Phone: " . $customer['phone'] . "<br>";
    //     }
    // } else {
    //     echo "Không có dữ liệu trong bảng 'customers'.";
    // }

    // Đóng kết nối
    $conn = null;
} catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}

?>
