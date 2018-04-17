<?php

// var_dump($sv);
// var_dump($sv1);
// if($sv === $sv1) echo "<br>giong"; // '===': so sánh tuyệt đối (so sánh về mọi mặt)
// else echo "<br>khac";

class sinhvien{
    // private để toàn vẹn dữ liệu (bảo mật database), chỉ class chứa nó mới có thể truy cập
    private $name = "TTK&NNNU";
    // function ở đây là Phương Thức chứ không phải hàm
    public function getName(){ 
        return $this->name;
    }
    // Mặc định là public
    function changeName($x){
        $this->name = $x;
    }
}

$sv = new sinhvien;
$sv1 = new sinhvien;

// echo "$sv->name<br>"; // Thuộc tính public mới lấy được $name
// $sv->name = "NNNU&TTK"; // Gán thuộc tính
// echo "$sv->name<br>";
echo $sv->getName(),"<br>";
$sv->changeName('It&Uen');
echo $sv->getName(),"<br>";

$sv->age = 21; // Có thể thêm thuộc tính nhưng chỉ cho 1 object (đối tượng) của class [*]
echo $sv->age;
// echo $sv1->age; [*] không có thuộc tính này

?>