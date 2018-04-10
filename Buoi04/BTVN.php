<?php

$mystr= 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890'; // kí tự muốn xuất hiện trong token
$strlen = strlen($mystr)-1; // Vì biến số start trong substr() lấy vị trí đầu mảng là 0 

function rand_str($length){
    GLOBAL $mystr,$strlen; // Dùng biến toàn cục để không phải khởi tạo lại mỗi lần gọi hàm
    $token = '';
    for($i=0;$i<$length;$i++)
        $token .= substr($mystr,rand(0,$strlen),1); // substr($mảng,start,số kí tự lấy ra)
    return $token;
}

echo rand_str(30);

?>