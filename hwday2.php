<?php
// câu 1:Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không. 
/*
function check_Even_Number($number){
    if($number % 2 ==0){
        echo'Đây là số chẵn';
    }else{
        echo'Không phải số chẵn';
    }
}
echo check_Even_Number(4);
*/
//Câu 2:Viết chương trình PHP để tính tổng của các số từ 1 đến n.
/*
function sum($number){
    $sum = 0;
    for($x = 1; $x <= $number; $x++){
         $sum += $x;
    }
    return $sum;
}
echo sum(5);
*/

//câu 3: Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
/*
for ($i = 1; $i <= 10; $i++) {
    echo "Bảng cửu chương nhân $i:\n";

    for ($j = 1; $j <= 10; $j++) {
        $u = $i * $j;
        echo "$i x $j = $u\n";
    }
}
*/

//Câu 4:Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
/*
function checkWord($string, $word) {
    
    $position = strpos($string, $word);
    if ($position !== false) {
        echo "Chuỗi '$string' chứa từ '$word'";
    } else {
        echo "Chuỗi '$string' không chứa từ '$word'";
    }
}
echo checkWord("Pham Văn Đoan", "Đoan");
*/

//Câu 5:Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
/*
function findMinMax($array) {
    $min = $array[0]; 
    $max = $array[0];

    foreach ($array as $value) {
        if ($value < $min) {
            $min = $value; 
        }
        if ($value > $max) {
            $max = $value; 
        }
    }

    echo "Giá trị nhỏ nhất: $min\n";
    echo "Giá trị lớn nhất: $max\n";
}

$array = [4, 2, 9, 7, 5, 1];
findMinMax($array);
*/

//câu 6:Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần
/*
$subject = [1,43,55,24];
fuction arrange($subject){
sort($subject, SORT_NUMERIC);
foreach ($subject as $key => $val) {
    echo "subject[" . $key . "] = " . $val . "<br />";
}
}
*/

//câu 7: Viết chương trình PHP để tính giai thừa của một số nguyên dương
/*
function factorial($number) {
    if ($number <= 1) {
        return 1; 
    } else {
        return $number * factorial($number - 1); 
    }
}


$n = 5;
$result = factorial($n);

echo "Giai thừa của $n là: $result";
*/

//câu 8:Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước

function is_Prime($number) {
    if ($number <= 1) {
        return false; 
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false; 
        }
    }

    return true; 
}

function find_Primes_InRange($start, $end) {
    echo "Các số nguyên tố trong khoảng từ $start đến $end là:\n";

    for ($i = $start; $i <= $end; $i++) {
        if (is_Prime($i)) {
            echo $i . " ";
        }
    }
}

 echo find_Primes_InRange(10, 30);
