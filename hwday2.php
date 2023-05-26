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
function arrange($subject){
    sort($subject, SORT_NUMERIC);
    foreach ($subject as $key => $val) {
    echo "subject[" . $key . "] = " . $val . "<br />";
    }
}
echo arrange($subject);
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
/*
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
 */

 // câu 9: Viết chương trình PHP để tính tổng của các số trong một mảng
/*   
     function sum_Of_Numbers_In_Array($array){
        $sum = 0;
        foreach($array as $number){
            $sum = $sum + $number;
        }
        return $sum;
     }
     $array = array (1,2,3,4,5);
     echo sum_Of_Numbers_In_Array($array);
*/

//câu 10: Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
// tính số fibonacci theo công thức toán f(n-1) + f(n -2) học rồi so sánh nếu số đó lớn hơn giá trị bắt đầu và nhỏ hơn giá trị kết thúc thì nhận.
/*
function fibonacci($n)
{
    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

function print_Fibonacci_In_Range($start, $end)
{
    $n = 0;
    while (fibonacci($n) <= $end) {
        $fib = fibonacci($n);
        if ($fib >= $start) {
            echo $fib . " ";
        }
        $n++;
    }
}

$start = 0; 
$end = 100;

echo "Các số Fibonacci trong khoảng từ $start đến $end là: ";
print_Fibonacci_In_Range($start, $end);
*/


// câu 11: Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không
/*
function checkArmstrong($number){

     if (preg_match('/^[1-9][0-9]*$/', $number)){//Chỉ cho nhập số và số bắt đầu không được là số 0
            $sum = 0;
            $number1 = $number;
        while ($number > 0){
            $val = $number % 10;
            $sum += pow($val, strlen($number1));
            $number = $number / 10;
        }
        if ($number == $sum){
            echo "Đây là số Armstrong";
        }else{
            echo"Đây không phải số Armstrong";
        }
    }else{
        echo 'Đây không phải là số Armstrong';
    }
}

checkArmstrong(138,86);
*/

//câu 12:Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ
/*
function insert_Element_Into_Array($arr, $element, $location) {
    array_splice($arr, $location, 0, $element);
    return $arr;
}
$arr = array(1,2,3,4,5,6,7,8,9,10,11,12,13);
$element = 100;
$location = 4;
print_r(insert_Element_Into_Array($arr, $element, $location));
*/

//câu 13: Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng
/*
function remove_Duplicate_Elements($arr) {
    $uniqueArr = array_unique($arr);//dùng array_unique để loại bỏ các phần tử giống nhau
    return $uniqueArr;
}

$arr = array(1, 2, 2, 3, 4, 4, 5, 5);
$result = remove_Duplicate_Elements($arr);
print_r($result);
*/

//câu 14: Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
/*
function find_Element_Position($arr, $element) {
    $location = [];
    foreach ($arr as $key => $value) {
        if ($value === $element) {
            $location[] = $key;
        }
    }
    return $location;
}

$arr = array(1, 2, 3, 4, 3, 5, 3);
$element = 3;
$result =find_Element_Position($arr, $element);
echo "Các vị trí của phần tử $element trong mảng là: " . implode(", ", $result);
*/

//Câu 15: Viết chương trình PHP để đảo ngược một chuỗi.
/*
function reverse_String($string){
    return $reversedString = strrev($string);
}
$string ='naoD naV mahP';
$result = reverse_String($string);
echo 'Chuỗi đảo ngược là:  ' . $result;
*/

//Câu 16:Viết chương trình PHP để tính số lượng phần tử trong một mảng.
/*
function element_Count($arr){
     return count($arr);
}
$arr = array(1,2,3,4,4,4,5);
$result = element_Count($arr);
echo 'Số lượng phần tử của mảng là:' . $result;
*/

//câu 17:Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không
/*
function string_Palindrome($string){
    $reversedString = strrev($string);

    if($reversedString === $string){
        echo"Đây là chuỗi Palindrome";
    }else{
        echo"Đây không phải là chuỗi Palindrome";
    }
}
$string = '11111111';
echo string_Palindrome($string);
*/

//câu 18: Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng
/*
function find_Element_Position($arr, $element) {
    $location = [];
    foreach ($arr as $key => $value) {
        if ($value === $element) {
            $location[] = $key;
        }
    }
    return $location;
}

$arr = array(1, 2, 3, 4, 3, 5, 3);
$element = 3;
$result =find_Element_Position($arr, $element);
$count = count($result);
echo "Số lần xuất hiện của phần tử $element trong mảng là: " .$count;
*/

//câu 19: Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần
/*
function   sort_Array_In_Descending_Order($arr){
     rsort($arr);
     return $arr;// vì rsort không trả về 1 bảng mà sắp xếp trực tiếp trên bảng nên ta cần return lại
}
$arr = array( 8, 236, 534, 2, 55, 46);
print_r(sort_Array_In_Descending_Order($arr));
*/

//câu 20: Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng
/*
function add_Element( $arr, $element){
     array_push($arr, $element);//nếu muốn thêm vào đầu thì dùng array_unshift($arr, $element)
     return $arr;
}
$arr = array('Pham', 'Van', 'Doan');
$element = 102;
print_r(add_Element($arr, $element));
*/

// câu 21: Viết chương trình PHP để tìm số lớn thứ hai trong một mảng
/*
function   sort_Array_In_Descending_Order($arr){
    rsort($arr);
    return $arr[1];
}
$arr = array( 8, 236, 534, 2, 55, 46);
print_r(sort_Array_In_Descending_Order($arr));
*/

//Câu 22: Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
/*
function common_Divisor_And_Common_Multiple($number, $number1){
    $array = [];
    for ($i = $number; $i > 1; $i--){
        if ($number % $i ==0 and $number1 % $i==0){
            $array[] = $i;
            break;
        }
    }
    for ($j = $number1; ;$j++){
        if($j % $number == 0 and $j % $number1 == 0){
            $array[] = $j;
            break;
        }
    }
    return $array;
}
$number = 10;
$number1 = 20;
$result = common_Divisor_And_Common_Multiple($number, $number1);

echo'Ước chung lớn nhất là:'.$result[0];
echo "<br>";
echo'Bội chung nhỏ nhất là:'.$result[1];
*/
//câu 23: Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
/*
function perfect_Number($value){
    $sum = 0;
    for($i = 1; $i < $value; $i++){
        if($value % $i ==0){
            $sum += $i;
        }
    }
    if($sum == $value){
        echo "Đây là số hoàn hảo.";
    }else{
        echo'Đây không phải là số hoàn hảo.';
    }
}
echo perfect_Number(6);
*/

//câu 24:Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng
/*
function largest_Odd_Number($arr){
    rsort($arr);
    foreach($arr as $number){
        if($number % 2 !=0){
            return $number;
            break;
        }
    }
}
$arr = array(8,6,15,98,35);
echo largest_Odd_Number($arr);
*/

//câu 25: Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không
/*
function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    
    return true;
}

$number = 17; 
if (isPrime($number)) {
    echo "$number là số nguyên tố.";
} else {
    echo "$number không phải là số nguyên tố.";
}
*/

//Câu 26:Viết chương trình PHP để tìm số dương lớn nhất trong một mảng
/*
function check_positive_Numbers($arr) {
    rsort($arr);
   return $arr[0];
}
$arr = array(0, 23, 2, 234, 3);
echo check_positive_Numbers($arr);
*/

//câu 27: Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
/*
function biggest_Negative_Number($arr){
    rsort($arr);
    foreach($arr as $val){
        if($val < 0){
            echo'Số âm lớn nhất trong mảng là:'. $val;
            break;
        }
    }
}
$arr = array(9, 63, -1, 2, 23);
echo biggest_Negative_Number($arr);
*/

//câu 28: Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
/*
function sum_Odd($number){
    $sum  = 0;
    for($i = 1; $i <= $number; $i++){
        if($i % 2 != 0){
            $sum += $i;
        }
    }
    return $sum;
}
$number = 10;
echo sum_Odd($number);
*/

//câu 29: Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
/*
function perfect_Square($number){
    if($number / sqrt($number) == sqrt($number)){
        return 'Đây là số chính phương.';
    }else{
        return 'Đây không phải là số chính phương.';
    }
}

echo perfect_Square(10);
*/

//câu 30: Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
/*
function check_For_Existence($string, $string1){
    if(strstr($string, $string1) === false){
         echo'No';
    }else { 
        echo'Yes';}
}
echo check_For_Existence('pham van doan', 'nam' )
*/
?>
