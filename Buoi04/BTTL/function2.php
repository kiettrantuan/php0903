<?php

function inSo($x = 0){
    $x += 5;
    return $x;
}
//echo inSo(3);

/// Truyền vào 1 số in ra tăng 1 đơn vị; không dùng phép cộng
function inCong($x = 0){
    $x = ($x*2)-($x-1);
    return $x;
}
//echo inCong(3);

/// Function giải phương trình bậc 1 ax +b = 0
function PTbacI($a=2,$b=4){
    $x = '';
    if($a == 0) {
        if(b == 0) $x = "Phương trình vô số nghiệm"; // Thiếu trường hợp cho b (b == 0 -> vô số ng / b != 0 -> vô ng)
        else $x = "Phương trình vô nghiệm";
    }
    else $x = -($b/$a);
    return $x;
}
//echo PTbacI(0,2);

/// Function giải PT bậc 2 ax^2 + bx + c = 0
function PTbacII($a=0,$b=0,$c=0){
    if($a == 0){
        echo PTbacI($b,$c);
        return;
    }
}

/// Function nhập x từ 1 -> x số chẵn thì cộng, lẻ bỏ qua
function TongChan($x=0){
    $kq = 0;
    for($i=2;$i<=$x;$i+=2) $kq += $i;
    return $kq;
}
//echo TongChan(10);

/// Function cộng số chẵn từ a -> b
function TongChanAB($a=0,$b=0){
    $kq = 0;
    if($a>=$b) return $kq;
    else for($a;$a<=$b;$a++) if($a%2 == 0) $kq += $a;
    return $kq;
}
//echo TongChanAB(4,10);

/// Function tìm dãy số nguyên tố nhỏ hơn n
function SoNguyenTo($x=2){
    if($x < 2) return false;
    for($i=2;$i<=sqrt($x);$i++)
        if($x%$i==0) return false;
    return true;
}
//echo SoNguyenTo(2);

$arr = [];
function DaySNT($n=2){
    $temp = [];
    if($n < 2) return;
    for($i=2;$i<=$n;$i++) 
        if (SoNguyenTo($i)) array_push($temp,$i);
    $arr = $temp;
    unset($temp);
    return $arr;
}
echo "<pre>";
print_r(DaySNT(60));
echo "</pre>";

?>