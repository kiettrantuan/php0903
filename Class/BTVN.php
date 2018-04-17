<?php

// BT1: Cho dãy số {10,11,12..99}; in ra các số 11,22,33,44..99/
// tương tự với các dãy số {100..999}, {1000..9999}..; không nên chạy for vì tốn bộ nhớ
$arrNum = array();  // Number array
for($i = 10; $i < 100; $i++) // [*]
{
    array_push($arrNum,$i);
}
// print_r($arrNum);
$arrOut = array();  // Result array
$firstOutNum = 11;  // First Number in arrOut
$firstOutPos = 1;   // firstOutNum's Position in arrNum
// Below while() is used for above 2number{10..99} array; mean {100..999},{1000..9999}.. Test in [*]
while($arrNum[$firstOutPos] != $firstOutNum){
    $firstOutPos*=10;
    $firstOutPos++;
    $firstOutNum*=10;
    $firstOutNum++;
}
// echo $firstOutPos,"<br>",$firstOutNum;
// Below for() add the needed numbers to arrOut
for($i = 0; $i < 9; $i++){
    array_push($arrOut,$arrNum[$firstOutPos]);
    $firstOutPos+=$firstOutNum;
}
echo "<pre>";
print_r($arrOut);
echo "</pre>";

// BT2: Cho dãy số ngẫu nhiên tăng dần hoặc giảm dần {1,5,7,8,9,10..}; cho biết số user vừa lấy ra là số bao nhiêu/
$arr2 = array(5,7,8,9,10,11,12,13,14,15);
$arrMaxPos = count($arr2)-1;            // Max position in arr2
$uChoice = $arr2[rand(0,$arrMaxPos)];   // User's choice
echo $uChoice,"<br>";
// Binary Search
$aChoicePos = round($arrMaxPos/2);      // Admin's choice position
echo $aChoicePos,"<br>";
while($arr2[$aChoicePos] != $uChoice){
    if($arr2[$aChoicePos] < $uChoice) $aChoicePos++;
    else if($arr2[$aChoicePos] > $uChoice) $aChoicePos--;
}
echo $arr2[$aChoicePos];

?>