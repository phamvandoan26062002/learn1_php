<?php
require_once "db_connects.php";

// Kết nối tới cơ sở dữ liệu
$conn = connectDB();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Customer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Admin Order</title>
</head>
<body>
<div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="title">PHARMADI</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="title">Trang chủ</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="title">Sản phẩmm</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="title">Khách hàng</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="title">Đơn hàng</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="title">Thương hiệu</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="title">Tài khoản</span>
                    </a>
                </li>
            </ul>
        </div>
        <!--main-->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline" class="menu-icon"></ion-icon>
                </div>
        <!--user-->
                <div class="user">
                    <ion-icon name="person-circle-outline" class="user-icon"></ion-icon>
                    <div class="user-name">
                        <p>Huyen My</p>
                    </div>
                    <ion-icon name="chevron-down-outline" class="drop-down-icon"></ion-icon>
                </div>
            </div>
        </div>
        </div>
        
    <div class="content">
            <div class="search-form">
                <form action="" method="get">
                    <!-- Ô tìm kiếm theo trạng thái -->
                    <div class="status">
                            <span>Trạng thái</span>
                            <select name="account_status" class="search-box">
                                <option value="Tat Ca">Tất cả</option>
                                <option value="Duyet">Duyệt</option>
                                <option value="Chua Duyet">Chưa duyệt</option>
                            </select>
                        
                    </div>

                    <!-- Ô tìm kiếm theo tên khách hàng -->
                    <div class="name-user">      
                            <span>Tên khách hàng</span>
                            <input type="text" name="name" class="search-box" placeholder="  Nhập tên khách hàng">                       
                    </div>

                    <!-- Nút tìm kiếm -->
                    <button type="submit" class="search-btn">Tìm kiếm</button>
                </form>
            </div>

    <p>DANH SÁCH KHÁCH HÀNG</p>

    <?php
    // Kiểm tra xem người dùng đã nhấn nút tìm kiếm chưa
    if (isset($_GET['account_status']) || isset($_GET['name'])) {
        // Xử lý dữ liệu tìm kiếm
        $status = $_GET['account_status'];
        $name = $_GET['name'];

        // Tạo truy vấn dựa vào dữ liệu tìm kiếm
        $sql = "SELECT * FROM customers WHERE 1=1"; // 1=1 để tránh lỗi khi không có điều kiện tìm kiếm

        if (!empty($status)) {
            if ($status === "Tat Ca") {
                // Nếu người dùng chọn "Tất cả", không cần thêm điều kiện về trạng thái
            } else {
                $sql .= " AND account_status='$status'";
            }
        }

        if (!empty($name)) {
            $sql .= " AND name LIKE '%$name%'";
        }

        // Thực hiện truy vấn
        $result = $conn->query($sql);

        // Hiển thị kết quả tìm kiếm trong bảng
        echo '<div class="customer-table">';
        echo '<table>';
        echo '<tr>
            <th>STT</th>
            <th>Mã khách hàng</th>
            <th>Tên khách hàng</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Số GPP</th>
            <th>Trạng thái</th>
        </tr>';

        if ($result->num_rows > 0) {
            $index = 1;
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
            echo '<td>' . $index . '</td>';
            echo '<td><a href="';
            if ($row["account_status"] === "Chua Duyet") {
                echo 'CustomerEdit.php?customer_id=' . $row["customer_id"];
            } else {
                echo 'CustomerAddNew.php?customer_id=' . $row["customer_id"];
            }
            echo '">' . $row["customer_id"] . '</a></td>';
            echo '<td><a href="';
            if ($row["account_status"] === "Chua Duyet") {
                echo 'CustomerEdit.php?customer_id=' . $row["customer_id"];
            } else {
                echo 'CustomerAddNew.php?customer_id=' . $row["customer_id"];
            }
            echo '">' . $row["name"] . '</a></td>';
            echo '<td><a href="';
            if ($row["account_status"] === "Chua Duyet") {
                echo 'CustomerEdit.php?customer_id=' . $row["customer_id"];
            } else {
                echo 'CustomerAddNew.php?customer_id=' . $row["customer_id"];
            }
            echo '">' . $row["phone"] . '</a></td>';
            echo '<td><a href="';
            if ($row["account_status"] === "Chua Duyet") {
                echo 'CustomerEdit.php?customer_id=' . $row["customer_id"];
            } else {
                echo 'CustomerAddNew.php?customer_id=' . $row["customer_id"];
            }
            echo '">' . $row["address"] . '</a></td>';
            echo '<td><a href="';
            if ($row["account_status"] === "Chua Duyet") {
                echo 'CustomerEdit.php?customer_id=' . $row["customer_id"];
            } else {
                echo 'CustomerAddNew.php?customer_id=' . $row["customer_id"];
            }
            echo '">' . $row["gpp_number"] . '</a></td>';
            echo '<td><a href="';
            if ($row["account_status"] === "Chua Duyet") {
                echo 'CustomerEdit.php?customer_id=' . $row["customer_id"];
            } else {
                echo 'CustomerAddNew.php?customer_id=' . $row["customer_id"];
            }
            echo '">' . $row["account_status"] . '</a></td>';
            echo '</tr>';
                $index++;
            }
        } else {
            echo '<tr><td colspan="7">Không tìm thấy kết quả phù hợp.</td></tr>';
        }

        echo '</table>';
        echo '</div>';
    } else {
        // Hiển thị dữ liệu khách hàng khi chưa tìm kiếm bất cứ điều gì
        $sql = "SELECT * FROM customers";
        $result = $conn->query($sql);

        // Hiển thị dữ liệu khách hàng trong bảng
        echo '<div class="customer-table">';
        echo '<table>';
        echo '<tr>
            <th>STT</th>
            <th>Mã khách hàng</th>
            <th>Tên khách hàng</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Số GPP</th>
            <th>Trạng thái</th>
        </tr>';

        if ($result->num_rows > 0) {
            $index = 1;
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
            echo '<td>' . $index . '</td>';
            echo '<td><a href="';
            if ($row["account_status"] === "Chua Duyet") {
                echo 'CustomerEdit.php?customer_id=' . $row["customer_id"];
            } else {
                echo 'CustomerAddNew.php?customer_id=' . $row["customer_id"];
            }
            echo '">' . $row["customer_id"] . '</a></td>';
            echo '<td><a href="';
            if ($row["account_status"] === "Chua Duyet") {
                echo 'CustomerEdit.php?customer_id=' . $row["customer_id"];
            } else {
                echo 'CustomerAddNew.php?customer_id=' . $row["customer_id"];
            }
            echo '">' . $row["name"] . '</a></td>';
            echo '<td><a href="';
            if ($row["account_status"] === "Chua Duyet") {
                echo 'CustomerEdit.php?customer_id=' . $row["customer_id"];
            } else {
                echo 'CustomerAddNew.php?customer_id=' . $row["customer_id"];
            }
            echo '">' . $row["phone"] . '</a></td>';
            echo '<td><a href="';
            if ($row["account_status"] === "Chua Duyet") {
                echo 'CustomerEdit.php?customer_id=' . $row["customer_id"];
            } else {
                echo 'CustomerAddNew.php?customer_id=' . $row["customer_id"];
            }
            echo '">' . $row["address"] . '</a></td>';
            echo '<td><a href="';
            if ($row["account_status"] === "Chua Duyet") {
                echo 'CustomerEdit.php?customer_id=' . $row["customer_id"];
            } else {
                echo 'CustomerAddNew.php?customer_id=' . $row["customer_id"];
            }
            echo '">' . $row["gpp_number"] . '</a></td>';
            echo '<td><a href="';
            if ($row["account_status"] === "Chua Duyet") {
                echo 'CustomerEdit.php?customer_id=' . $row["customer_id"];
            } else {
                echo 'CustomerAddNew.php?customer_id=' . $row["customer_id"];
            }
            echo '">' . $row["account_status"] . '</a></td>';
            echo '</tr>';
                $index++;
            }
        } else {
            echo '<tr><td colspan="7">Không có dữ liệu khách hàng.</td></tr>';
        }

        echo '</table>';
        echo '</div>';
    }

    // Đóng kết nối
    $conn->close();
    ?>
    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<script>


    //add hovered class in selected list item
    let list=document.querySelectorAll('.navigation li');
    function activeLink(){
        list.forEach((item)=>
        item.classList.remove('hovered'));
        this.classList.add('hovered');
    }
    list.forEach((item)=>
    item.addEventListener('mouseover', activeLink));


</script>
</html>
