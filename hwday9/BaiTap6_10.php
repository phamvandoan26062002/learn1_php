<?php
// Bài tập Tạo lớp Xe hơi:
// Tạo một lớp XeHoi với các thuộc tính là hãng xe, màu sắc và năm sản xuất.
// Tạo phương thức để hiển thị thông tin đầy đủ của xe.

    class Car{
        public $trademark, $color, $yearOfManufacture;

        public function __construct($trademark, $color, $yearOfManufacture){
            $this -> trademark = $trademark;
            $this -> color = $color;
            $this -> yearOfManufacture = $yearOfManufacture;
        }

        public function getTrademark(){
            echo "Thông tin của xe:" ."<br>";
            echo "Hãng xe:" . $this-> trademark . "<br>";
            echo "Màu sắc:" . $this -> color . "<br>";
            echo "Năm sản xuất: ". $this -> yearOfManufacture ;

    }
}
$Car = new Car('BMW', 'Red', 1990);
$Car -> getTrademark();

// Câu 7: Bài tập Tạo lớp Phân số:
// Tạo một lớp PhanSo với các thuộc tính tử số và mẫu số.
// Tạo các phương thức để thực hiện các phép toán cộng, trừ, nhân và chia giữa các phân số.

    class Fraction{
        public $numerator;
        public $denominator;

        public function __construct( $numerator, $denominator){
            $this -> numerator = $numerator;
            $this -> denominator = $denominator;
        }

        public function sum($fraction){
            $sumNumerator = $this -> numerator *  $fraction -> denominator + $fraction -> numerator * $fraction -> denominator;
            $sumDenominator = $this -> denominator * $fraction -> denominator;
            return new Fraction($sumNumerator, $sumDenominator);
        }

        public function subtraction($fraction){
            $apartNumerator = $this -> numerator *  $fraction -> denominator - $fraction -> numerator * $fraction -> denominator;
            $apertDenominator = $this -> denominator * $fraction -> denominator;
            return new Fraction($apartNumerator, $apertDenominator);
        }

        public function multiplication($fraction){
            $multiplyNumerator = $this -> numerator * $fraction -> numerator;
            $multiplyDenominator = $this -> denominator * $fraction -> denominator;
            return new Fraction($multiplyNumerator, $multiplyDenominator);
        }

        public function division($fraction){
            $divisionNumerator = $this -> numerator * $fraction -> denominator;
            $divisionDenominator = $this -> denominator * $fraction -> numerator;
            return new Fraction($divisionNumerator, $divisionDenominator);
        }

        public function display(){
            echo $this->numerator . "/" . $this->denominator;
        }
    }

    $Fraction1 = new Fraction(1,2);
    $Fraction2 = new Fraction(3,2);

    $Sum = $Fraction1 -> sum($Fraction2);
    echo "Tổng: ";
    $Sum -> display();
    echo '<br>';

    $subtraction = $Fraction1 -> subtraction($Fraction2);
    echo "Hiệu: ";
    $subtraction -> display();
    echo '<br>';

    $multiplication = $Fraction1 -> multiplication($Fraction2);
    echo "Tích: ";
    $multiplication -> display();
    echo '<br>';

    $division = $Fraction1 -> division($Fraction2);
    echo "Thương: ";
    $division -> display();



// Câu 8: Bài tập Tạo lớp Người:
// Tạo một lớp Nguoi với các thuộc tính tên, tuổi và địa chỉ.
// Tạo phương thức để hiển thị thông tin người.

        class People{
            public $name, $age, $address;

            public function __construct($name, $age, $address){
                $this -> name = $name;
                $this -> age = $age;
                $this -> address = $address;
            }

            public function displayInfomation(){
                echo "Thông tin cá nhân:"."<br>";
                echo "Họ và tên: ". $this->name ."<br>";
                echo "Tuổi: ". $this->age ."<br>";
                echo "Địa chỉ:". $this -> address ."<br>";
            }
        }

        $People = new People("Phạm Văn Đoan", 21, "Hà Nội");
        $People -> displayInfomation();




// Câu 9: Bài tập Tạo lớp Sản phẩm:
// Tạo một lớp SanPham với các thuộc tính tên, giá và mô tả.
// Tạo phương thức để hiển thị thông tin chi tiết của sản phẩm.

            class Product{
                public $name, $price, $description;

                public function __construct ($name, $price, $description){
                    $this -> name = $name;
                    $this -> price = $price;
                    $this -> description = $description;
                }

                public function displayProduct(){
                    echo "Thông tin chi tiết sản phẩm:" . "<br />";
                    echo "Tên sản phẩm:". $this -> name . "<br />";
                    echo "Giá:". $this -> price . "<br />";
                    echo "Mô tả:". $this -> description ;
                }
            }

            $Product = new Product("Điều hòa", 100000000, "Điều hòa hỏng");
            $Product -> displayProduct();





// Câu 10: Bài tập Tạo lớp Đặt phòng khách sạn:
// Tạo một lớp DatPhong voi các thuộc tính tên, ngày đến và số đêm ở lại.
// Tạo phương thức để tính tổng số tiền cần thanh toán dựa trên giá phòng.

                class BookingRoom{

                    public $name, $date, $timeOfStay, $price;

                    public function __construct($name, $date, $price,$timeOfStay){
                        $this -> name = $name;
                        $this -> date = $date;
                        $this -> price = $price;
                        $this -> timeOfStay = $timeOfStay;
                    }

                    public function totalMoney(){
                        echo "Khách hàng: ". $this -> name ."<br>";
                        echo "Ngày đến:". $this -> date ."<br>";
                        echo "Giá phòng theo đêm:". $this -> price ."/Đêm"."<br>";
                        echo "Số đêm ở lại:" . $this -> timeOfStay."<br>";
                        echo "Tổng hóa đơn:" . $this -> price * $this -> timeOfStay."<br>";

                    }
                }

                $BookingRoom = new BookingRoom("Phạm Văn Đoan", "04/07/2023", 1000000,  3);
                $BookingRoom -> totalMoney();



?>