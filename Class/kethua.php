<?php

// Mức truy cập: private/protected/private
// private:     chỉ bên trong class chứa mới có thể truy cập,bên ngoài class không thể truy cập
// protected:   chỉ bên trong class chứa và class kế thừa mới có thể truy cập,bên ngoài class không thể truy cập
// public:      có thể truy cập từ bất cứ đâu

class sinhvien{
    private $name = "TTK&NNNU";
    protected $money = 10000;
    // function ở đây là Phương Thức chứ không phải hàm
    public function getName(){
        return $this->name;
    }
    // Mặc định là public
    function changeName($x){
        $this->name = $x;
    }
}

class hocsinh extends sinhvien {
    // extends là kế thừa; có thể tạo thuộc tính & function cùng tên ~ ghi đè function cha
    function getName(){
        // Lấy function cùng tên của class sinhvien, mục đích để có thể lấy được $name của sinhvien
        return parent::getName();
    }
    function receiveMoney(){
        return $this->money;
    }
}

$hs = new hocsinh;
echo $hs->getName(),"<br>";
echo $hs->receiveMoney(),"<br>";

?>