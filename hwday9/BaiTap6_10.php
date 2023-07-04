<?php
// Bài tập Tạo lớp Xe hơi:
// Tạo một lớp XeHoi với các thuộc tính là hãng xe, màu sắc và năm sản xuất.
// Tạo phương thức để hiển thị thông tin đầy đủ của xe.

//     class Car{
//         public $trademark, $color, $yearOfManufacture;

//         public function __construct($trademark, $color, $yearOfManufacture){
//             $this -> trademark = $trademark;
//             $this -> color = $color;
//             $this -> yearOfManufacture = $yearOfManufacture;
//         }

//         public function getTrademark(){
//             echo "Thông tin của xe:" ."<br>";
//             echo "Hãng xe:" . $this-> trademark . "<br>";
//             echo "Màu sắc:" . $this -> color . "<br>";
//             echo "Năm sản xuất: ". $this -> yearOfManufacture ;

//     }
// }
// $Car = new Car('BMW', 'Red', 1990);
// $Car -> getTrademark();

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





?>