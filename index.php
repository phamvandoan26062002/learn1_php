<?php
#Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp(). Nếu ra số âm hoặc dương thì chuỗi 2 không được bắt đầu bằng chuỗi 1 còn trả về giá trị bằng 0 thì ngược lại.
/*
function checkString ($string, $string1){
    return strncmp($string, $string1, strlen($string));
}
echo checkString('hello', 'hello world');
*/

#Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
/*
function uppercaseString($string){
    return strtoupper($string);
}
echo uppercaseString('Pham Van Doan');
*/

#Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
/*
function lowercase_A_String($string){
    return strtolower($string);
}
echo lowercase_A_String('Pham Van Doan');
*/

#Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
/*
function capitalize_First_Fetter($string){
    return ucwords($string);
}
echo capitalize_First_Fetter('pham van doan');
*/

#Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim()
/*
function remove_Whitespace($string){
    return trim($string);
}
echo remove_Whitespace("   pham van doan   ");
*/

#Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim()
/*
function remove_The_First_Character($string){
    return ltrim($string, $string[0]);
}
echo remove_The_First_Character('pham van doan');
*/

#Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
/*
function remove_The_Last_Character($string){
    return rtrim($string, -1);
}
echo remove_The_Last_Character('pham van doan1');
*/

#Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode(). 
/*
function split_String($string){
    return explode(" ", $string);
}
print_r(split_String("pham van doan")) ;#print_r dùng để in giá trị của mảng trong php
*/

#Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode()
/*
function join_Elements_Together($string = []){
    return implode(' ', $string);
}
echo join_Elements_Together(['pham', 'van', 'doan']);
*/

#Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
/*
function add_String($string1, $string2){
    return str_pad($string1, 25, $string2, STR_PAD_LEFT);
}
echo add_String('Phạm Văn Đoan', 'handsome');
*/

#
?>