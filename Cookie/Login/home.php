<?php

session_start();
if(!isset($_SESSION['user-test']) && !isset($_COOKIE['user-test'])){
    $_SESSION['error'] = "Please Login !<br>";
    header("Location:login.php");
}
// Gán cookie thành session để khi chưa tắt trình duyệt mà cookie hết hạn sẽ không bị đăng xuất
else if(isset($_COOKIE['user-test'])) $_SESSION['user-test'] = $_COOKIE['user-test'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h2>Welcome Home<h2>
    <a href="logout.php">Logout</a>

</body>
</html>