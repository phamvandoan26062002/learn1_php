<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CustomerAddNew.css">
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
        <div class="breadcrumb0">
            <ul class="breadcrumb">
                <li><a href="Customer.php" class="a1">Danh sách khách hàng</a></li>
                <li><a href="#" class="a2">Chi tiết khách hàng</a></li>
            </ul>
        </div>

        <div class="accept_info">
            

                <form action="">

                    <div class="content1">
                        <p>THÔNG TIN KHÁCH HÀNG</p>
                        <button type="submit" class="btn-accept">Phê duyệt</button>
                        
                    </div>

                    <div class="id">      
                            <span>Mã khách hàng</span>
                            <input type="text" name="cusid" class="cusid" placeholder="">                       
                        </div>
                    <div class="Status">      
                        <span>Trạng thái</span>
                        <input type="text" name="cusStatus" class="cusStatus" placeholder="">                       
                    </div>
                    <div class="Name">      
                        <span>Tên nhà thuốc</span>
                        <input type="text" name="cusName" class="cusName" placeholder="">                       
                    </div>
                    <div class="Contact">      
                        <span>Tên người liên hệ</span>
                        <input type="text" name="cusContact" class="cusContact" placeholder="">                       
                    </div>
                    <div class="Phone">      
                        <span>Số điện thoại</span>
                        <input type="text" name="cusPhone" class="cusPhone" placeholder="">                       
                    </div>
                    <div class="Address">      
                        <span>Địa chỉ</span>
                        <input type="text" name="cusAddress" class="cusAddress" placeholder="">                       
                    </div>
                    <div class="GPP">      
                        <span>Số GPP</span>
                        <input type="text" name="cusGPP" class="cusGPP" placeholder="">                       
                    </div>
                    <div class="GPPDate">      
                        <span>Ngày cấp</span>
                        <input type="text" name="cusGPPDate" class="cusGPPDate" placeholder="">                       
                    </div>
                    <div class="GPPAddr">      
                        <span>Nơi cấp</span>
                        <input type="text" name="cusGPPAddr" class="cusGPPAddr" placeholder="">                       
                    </div>
                </form>
        </div>

        
</div>



        </body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>