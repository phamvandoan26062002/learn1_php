<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "manager_customers";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // // Tạo bảng KHACHHANG
    // $sql = "CREATE TABLE IF NOT EXISTS KHACHHANG (
    //     MAKH INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     HOTEN VARCHAR(50) NOT NULL,
    //     DCHI VARCHAR(100) NOT NULL,
    //     SODT VARCHAR(20) NOT NULL,
    //     NGSINH DATE NOT NULL,
    //     DOANHSO DECIMAL(10,2) NOT NULL,
    //     NGDK DATE NOT NULL
    // )";
    // $conn->exec($sql);
    // echo "Bảng 'KHACHHANG' đã được tạo thành công <br>";

    // // Tạo bảng NHANVIEN
    // $sql = "CREATE TABLE IF NOT EXISTS NHANVIEN (
    //     MANV INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     HOTEN VARCHAR(50) NOT NULL,
    //     NGVL DATE NOT NULL,
    //     SODT VARCHAR(20) NOT NULL
    // )";
    // $conn->exec($sql);
    // echo "Bảng 'NHANVIEN' đã được tạo thành công <br>";

    // // Tạo bảng SANPHAM
    // $sql = "CREATE TABLE IF NOT EXISTS SANPHAM (
    //     MASP INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     TENSP VARCHAR(50) NOT NULL,
    //     DVT VARCHAR(20) NOT NULL,
    //     NUOCSX VARCHAR(50) NOT NULL,
    //     GIA DECIMAL(10,2) NOT NULL
    // )";
    // $conn->exec($sql);
    // echo "Bảng 'SANPHAM' đã được tạo thành công <br>";

    // // Tạo bảng HOADON
    // $sql = "CREATE TABLE IF NOT EXISTS HOADON (
    //     SOHD INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     NGHD DATE NOT NULL,
    //     MAKH INT(6) UNSIGNED,
    //     MANV INT(6) UNSIGNED,
    //     TRIGIA DECIMAL(10,2) NOT NULL,
    //     FOREIGN KEY (MAKH) REFERENCES KHACHHANG(MAKH),
    //     FOREIGN KEY (MANV) REFERENCES NHANVIEN(MANV)
    // )";
    // $conn->exec($sql);
    // echo "Bảng 'HOADON' đã được tạo thành công <br>";

    // // Tạo bảng CTHD
    // $sql = "CREATE TABLE IF NOT EXISTS CTHD (
    //     SOHD INT(6) UNSIGNED,
    //     MASP INT(6) UNSIGNED,
    //     SL INT(6) UNSIGNED,
    //     FOREIGN KEY (SOHD) REFERENCES HOADON(SOHD),
    //     FOREIGN KEY (MASP) REFERENCES SANPHAM(MASP)
    // )";
    // $conn->exec($sql);
    // echo "Bảng 'CTHD' đã được tạo thành công <br>";

    // //insert
    // $nhanviens = array(
    //     array('1', 'Nguyen Nhu Nhut', '0927345678', '2006-04-13'),
    //     array('2', 'Le Thi Phi Yen', '0987567390', '2006-04-21'),
    //     array('3', 'Nguyen Van B', '0997047382', '2006-04-27'),
    //     array('4', 'Ngo Thanh Tuan', '0913758498', '2006-06-24'),
    //     array('5', 'Nguyen Thi Truc Thanh', '0918590387', '2006-07-20')
    // );

    // $stmt = $conn->prepare('INSERT INTO NHANVIEN (MANV, HOTEN, SODT, NGVL) VALUES (?, ?, ?, ?)');

    // foreach ($nhanviens as $nhanvien) {
    //     $stmt->execute($nhanvien);
    // }
    // echo "Thêm thông tin nhân viên thành công";
    

    //update

    // $stmt = $conn->prepare('UPDATE NHANVIEN SET SODT = ? WHERE MANV = ?');
    // $stmt -> execute(['0000000000','NV05']);
    // echo "Cập nhật thông tin nhân viên thành công";

    //Delete
    // $stmt = $conn->prepare('DELETE FROM NHANVIEN WHERE MANV = ?');
    // $stmt -> execute(['5']);
    // echo "Đã xóa nhân viên khỏi danh sách";

    //views

   $stmt = $conn->prepare('SELECT  * FROM NHANVIEN ');
   $stmt -> setFetchMode(PDO::FETCH_ASSOC);
   $stmt ->execute();

   while ($row = $stmt->fetch()){
        echo $row['MANV']. '<Br>';
        echo $row['HOTEN']. '<Br>';
        echo $row['SODT'].'<Br>';
        echo $row['NGVL']. '<Br>';

   }
    $conn = null;
} catch(PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}
?>
