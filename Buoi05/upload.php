<?php

$file = $_FILES['image']; // để nhận file upload ta phải để $_FILES

echo "<pre>";
print_r($file);
echo "</pre>";

// Chuyển file đã upload vào thư mục
// move_uploaded_file($file['tmp_name'],'fileupload/'.$file['name']);

// only image file -> check file size <= 1MB -> rename
date_default_timezone_set('Asia/Ho_Chi_Minh');
//if($file['type'] != "image/".substr($file['type'],6)) echo "Only image files allowed !";
// Nên dùng đuôi file để lọc dạng file vì type đôi khi không nhận dạng được là file gì (application/octet-stream)

$ext = strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
$arrExt = ['png','jpg','jpeg','gif'];
if(!in_array($ext,$arrExt)) echo "Only image files allowed !";
else if($file['size'] < 1024*1024){
    $newName = date('Y-m-d',time())."_".rand(131197,26081997)."_".$file['name'];
    move_uploaded_file($file['tmp_name'],'fileupload/'.$newName);
}

?>