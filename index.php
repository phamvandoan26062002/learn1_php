<?php
#Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp(). Nếu ra số âm hoặc dương thì chuỗi 2 không được bắt đầu bằng chuỗi 1 còn trả về giá trị bằng 0 thì ngược lại.
/*
function checkString ($string, $string1){
    if (strncmp($string, $string1, strlen($string)) == 0){
        echo'Yes';
    } else{
        echo'No';
    };
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

#Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().{STR_PAD_LEFT, STR_PAD_BOTH}
/*
function add_String($string1, $string2){
    return str_pad($string1, 25, $string2, STR_PAD_LEFT);
}
echo add_String('Phạm Văn Đoan', 'handsome');
*/

#Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().---> không dùng đk vì nó lấy ký tự cuối cùng mà mk truyền vào sau đó trả về tất cả các giá trị sau ký tự đó của chuỗi mẹ
/*
function check_String($string1, $string2){
    if(str_ends_with($string1, $string2) == false)
     {
        echo 'No';
     }
    else{
        echo 'Yes';} 
}
echo check_String('pham van doan','doan');
*/

#Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().---> nếu dùng strpos() với cú pháp tưởng tự sẽ nhanh hơn :)))
/*
function check_For_Existence($string, $string1){
    if(strstr($string, $string1) === false)
    { echo'No';}
    else { echo'Yes';}
}
echo check_For_Existence('pham van doan', 'nam' )
*/

#Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace(). Câu trúc hàm trên là: ký tự cần thay thế, ký tự thay thế, chuỗi có ký tự cần thay thế.
/*
function replace_Character($pattern, $replacement,$subject){
    return preg_replace('/[^\w]/',$replacement,$subject);
}
echo replace_Character('','_','pham+van+doan');
*/

#Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
/*
function integer_Check($number){
    if(is_int($number)){
        echo 'Yes';
    }else{
        echo 'No';
    }
}
echo integer_Check(15)
*/

#Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var(). Hằng số FILTER_VALIDATE_EMAIL trong PHP được sử dụng như một tham số cho hàm filter_var() để kiểm tra tính hợp lệ của một địa chỉ email.
/*
function check_Email($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL )){
        echo "Email hợp lệ";
    } else{
        echo"Email không hợp lệ";
    }
}
echo check_Email('phamvandoan26062002@gmail.com');
*/
?>