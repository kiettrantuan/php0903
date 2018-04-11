<?php

date_default_timezone_set('Asia/Ho_Chi_Minh');

$file = $_FILES['image']; // Để nhận file upload ta phải để $_FILES

echo "<pre>";
print_r($file);
echo "</pre>";

foreach($file['error'] as $error){
    if($error != 0){
        echo "Error Uploading !<br>";
        die;
    }
}
foreach($file['size'] as $size){
    if($size > 1024*1024){
        echo "File too large !<br>";
        // header("Refresh:5;url=index2.php"); // Đợi 5s trước khi refresh; quay về file index2.php
        header("location:index2.php"); // Quay về file index2.php
        // die;
    }
}
$arrExt = ['png','jpg','jpeg','gif'];
foreach($file['name'] as $name){
    if(!in_array(strtolower(pathinfo($name,PATHINFO_EXTENSION)),$arrExt)){
        echo "Only Image Files Allowed !<br>";
        die;
    }
}
foreach($file['tmp_name'] as $key => $tmp_name){
    $newName = date('Y-m-d',time())."_".rand(131197,26081997)."_".$file['name'][$key];
    move_uploaded_file($tmp_name,'Files2/'.$newName);
}

echo "Success !<br>";

?>