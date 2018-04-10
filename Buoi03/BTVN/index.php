<?php

$a = "Its Freaky Friday, Im in Christ Brown body";
echo "-Bài 1<br>",$a,'<br>',strpos($a,'Friday');

date_default_timezone_set('Asia/Ho_Chi_Minh');

$b = "2017-07-01";
echo "<br>-Bài 2<br>",$b,'<br>';
$c = date("d/m/Y",strtotime($b));
//echo $c['year'];
?>