<?php

date_default_timezone_set('Asia/Ho_Chi_Minh');

$file = $_FILES['image']; // để nhận file upload ta phải để $_FILES

echo "<pre>";
print_r($file);
echo "</pre>";

// check files error; validate filesize<=1MB,filetype=image,filename
$count = count($file['name']);  // Đếm số lượng file upload
$errorCount = 0;                // Đếm lỗi
$errorSize = 0;                 // Đếm số file quá size
$errorExt = 0;                  // Đếm số file sai định dạng
$arrExt = ['png','jpg','jpeg','gif'];

for($i = 0; $i < $count; $i++){
    if($file['error'][$i] != 0) $errorCount++;
    if($file['size'][$i] > 1024*1024) $errorSize++;
    if(!in_array(strtolower(pathinfo($file['name'][$i],PATHINFO_EXTENSION)),$arrExt)) $errorExt++;
}

// foreach() không cần biến $count -nhưng xét mỗi cái cần một dòng foreach gây tốn bộ nhớ, lâu hơn ?
// foreach($file['error'] as $error) if($error != 0) $errorCount++;
// foreach($file['size'] as $size) if($size > 1024*1024) $errorSize++;
// foreach($file['name'] as $name) if(!in_array(strtolower(pathinfo($name,PATHINFO_EXTENSION)),$arrExt)) $errorExt++;

if($errorCount != 0) echo "Error Uploading !<br>";
else {
    if($errorSize != 0) echo "File Size Over 1 Megabytes !<br>";
    else {
        if($errorExt != 0) echo "Only Image Files Allowed !<br>";
        else {
            for($i = 0; $i < $count; $i++){
                $newName = date('Y-m-d',time())."_".rand(131197,26081997)."_".$file['name'][$i];
                move_uploaded_file($file['tmp_name'][$i],'Files/'.$newName);
            }
        }
    }
}

?>