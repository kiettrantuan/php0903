<?php

// file này là server, xử lý thông tin từ form

// echo $_GET['txtName']; // $_GET là biến kiểu mảng; không bảo mật, lấy dữ liệu từ url
// echo "<br>";
// .../register.php?txtName=1323&txtEmail=&txtPass=&txtPass2=&btnReg=Register
// ngăn cách tên file (action="register.php") bằng '?'; ngăn cách tên thành phần bằng '&'
//  echo $_GET['id'];

// check pass min=6
// checl pw = pw2 ?
if(isset($_GET['txtName'])){
    echo $_GET['txtName']; // Kiểm tra phần tử txtPass đã có giá trị hay chưa
    echo "<br>";
}
if(isset($_GET['txtEmail'])){
    echo $_GET['txtEmail'];
    echo "<br>";
}
if(isset($_GET['txtPass'],$_GET['txtPass2']) && $_GET['txtPass'] !=0 && $_GET['txtPass2'] !=0 ){
    if(strlen($_GET['txtPass'])>5 && strlen($_GET['txtPass2'])>5){
        if($_GET['txtPass']==$_GET['txtPass2']){
            echo $_GET['txtPass'];
            echo "<br>";
            echo $_GET['txtPass2'];
            echo "<br>";
        }
        else echo "Password không trùng khớp !";
    }
    else echo "Password không đủ 6 kí tự !";
}
else echo "Password rỗng !";

?>