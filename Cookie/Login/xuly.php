<?php

session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');

if(isset($_POST['btnLogin'])){
    // So sánh với trong database; do chưa có nên ta so trực tiếp
    if($_POST['txtEmail'] == "yourmail@mail.com" && $_POST['txtPassword'] == "111111"){
        // Login xong lưu thông tin user vào session để lấy thông tin nhanh hơn
        $_SESSION['user-test'] = $_POST['txtEmail'];
        // Remember Me có tồn tại và value = 1
        if(isset($_POST['remember']) && $_POST['remember']){
            setcookie('user-test',$_POST['txtEmail'],time()+60);
        }
        // Đi tới trang chủ
        header("Location:home.php");
    }
    else{
        $_SESSION['error'] = "Username or Password Error<br>";
        header("Location:login.php");
    }
}


?>