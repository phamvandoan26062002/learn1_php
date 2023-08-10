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
    <link rel="stylesheet" href="./Brand.css">
</head>
<body>
    <?php require "./header.php"; ?>
    
    <div class="breadcrumb0">
        <ul class="breadcrumb">
            <li><a href="#" class="a1">Trang chủ</a></li>
            <li><a href="#" class="a2">Thương hiệu</a></li>
        </ul>
    </div>
    
    <!-- Phần HTML cho logo-container -->
    <div class="logo-container">
        <div class="logo-header">
            <h2>Danh sách thương hiệu</h2>
        </div>
        <div class="logo-slider">
            <?php
            require "./db_connects.php";
            $conn = connectDB();

            $sql = "SELECT logo_url FROM brands";
            $result = mysqli_query($conn, $sql);

            $count = 0; 
            while ($row = mysqli_fetch_assoc($result)) {
                $imageURL = $row['logo_url'];
                $displayStyle = $count < 6 ? "display: block;" : "display: none;";
                echo '<div class="img_logo" style="' . $displayStyle . '">';
                echo '<img src="' . $imageURL . '" alt="Logo">';
                echo '</div>';
                $count++;
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>
    
    <h2>Thương hiệu liên kết với PharmaDi</h2>

    <div class="brand-container">
        <?php
        $conn = connectDB();

        $sql = "SELECT * FROM brands";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $imageURL = $row['logo_url'];
                $description = $row['description'];
                $productCount = $row['product_count'];

                echo '<div class="brand">';
                echo '<img class="input" src="' . $imageURL . '" alt="Logo">';
                echo '<p class="input">' . $description . '</p>';
                echo '<p class="input" id="count">' . $productCount . ' sản phẩm</p>';
                echo '<a class="input" href = ""> Xem sản phẩm >>> </a>';
                echo '</div>';
            }
        } else {
            echo "Không có thông tin hãng.";
        }

        mysqli_close($conn);
        ?>
    </div>
    
    <?php require "./footer.php"; ?>
    
    <!-- Các thẻ script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Đặt thời gian thay đổi ảnh là 4 giây (4000 ms)
            var slideInterval = 4000;
            var isMouseOverSlider = false; // Biến để kiểm tra trạng thái di chuột vào slider
            
            // Lấy danh sách các hình ảnh trong slider
            var $slideContainer = $('.logo-slider');
            var $slides = $slideContainer.find('.img_logo');
            var currentIndex = 0;

            function showNextSlide() {
                // Kiểm tra xem di chuột có đang ở trên slider hay không
                if (!isMouseOverSlider) {
                    // Ẩn hết tất cả các ảnh
                    $slides.css('display', 'none');

                    // Hiển thị 6 ảnh tiếp theo
                    for (var i = 0; i < 6; i++) {
                        var nextIndex = (currentIndex + i) % $slides.length;
                        $slides.eq(nextIndex).css('display', 'block');
                    }

                    // Tăng currentIndex để chuẩn bị cho lần thay đổi tiếp theo
                    currentIndex = (currentIndex + 6) % $slides.length;
                }
            }

            // Hiển thị 6 ảnh đầu tiên
            showNextSlide();

            // Tự động thay đổi ảnh sau mỗi khoảng thời gian slideInterval
            setInterval(showNextSlide, slideInterval);

            // Xử lý sự kiện khi di chuột vào và ra khỏi slider
            $slideContainer.on('mouseover', function() {
                isMouseOverSlider = true;
            }).on('mouseout', function() {
                isMouseOverSlider = false;
            });
        });
    </script>
    
</body>
</html>
