<?php

// POST thông qua bộ nhớ tạm (trên server ~ browser) lấy dữ liệu
if(isset($_POST['txtName'])){
    echo $_POST['txtName'];
    echo "<br>";
}
// Lấy dữ liệu từ phương thưc POST lẫn GET
if(isset($_REQUEST['txtName'])){
    echo $_REQUEST['txtName'];
    echo "<br>";
}

?>