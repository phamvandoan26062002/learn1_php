<?php

echo "Demo github nhóm 4";

echo "sửa lần 1";

echo"Sửa lần 2";
echo"Tôi la thành viên tôi sửa lần 3";

$db_server = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "mysqli_bai1.php";

//connect
$dbh = mysqli_connect($db_server,$db_username,$db_pass);

 if (!$dbh)     
 die("Unable to connect to MySQL: " . mysqli_error());

 if (!mysqli_select_db($dbh, $db_name))     
 die("Unable to select database: " . mysqli_error());

//create table 
$sql_stmt = "CREATE TABLE IF NOT EXISTS sinhvien(
    MaSV varchar(10) not null PRIMARY key,
    HoTen varchar(50) not null,
    NgaySinh datetime, 
    LopHoc varchar (10),
    DTB float
);";
$result = mysqli_query($dbh, $sql_stmt);//Thực hiện

if (!$result)     
     die("Database access failed: " . mysqli_error()); 
else {
    echo "Database success";
}    

//insert
$sql_stmt = "INSERT INTO sinhvien`(MaSV`, HoTen, NgaySinh, LopHoc, DTB)"; 
$sql_stmt .= "VALUES('SV001', 'Le Thi A','2002/04/02','A1','8.2'),
                    ('SV002', 'Le Thi B','2002/05/02','A2','8.5'),
                    ('SV003', 'Le Thi C','2002/06/02','A3','9.0'),
                    ('SV004', 'Le Thi D','2002/07/02','A4','7.0'),
                    ('SV005', 'Le Thi E','2002/08/02','A5','6,0')"; 
$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL

if (!$result) {
    die("Adding failed: " . mysqli_error()); 
   // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Add success";
};

//update
$sql_stmt = "UPDATE sinhvien SET DTB = 8.5 WHERE MaSV = 'SV001'";
$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL

 if (!$result) {
     die("Update failed: " . mysqli_error());
    
} else {
    echo "Update success";
 }

 //delete
 $sql_stmt = "DELETE from sinhvien WHERE MaSV = 'SV003'";
$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL

 if (!$result) {
     die("Delete failed: " . mysqli_error());
    
} else {
    echo "Delete success";
 }
 ?>
