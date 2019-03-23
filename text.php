<?php
// use of explode 
$string = "MATH 187 - Fourier & Laplace Transformations & Com"; 
$str_arr = explode ("-", $string);  
print_r($str_arr[0]); 

$str = "ACT 111";
$str2 = "ACT 111";

if($str == $str2){
    echo "Hello";
}
else{
    echo "no"
}
// 2019-03-05