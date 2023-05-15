<?php
ECHO'phạm văn đoan';

function sum ($a, $b){
    return $a + $b;
}
echo sum (a:1 , b:2);

function dthv($a){
    return $a*$a;
}
echo "Dien tich hinh vuong la:".dthv (a:1);

#dùng biến globals
$a = 1;
$b = 2;

function dientich(){
    $GLOBALS['s'] = $GLOBALS['a'] * $GLOBALS['b'] * 1/2;
}
dientich();
echo 'Diện tích hình tam giác:'.$s;
?>