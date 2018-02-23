<?php
$t = time();
echo $t."<br>";
$t2 = $t + 17100;
$time1 = date("Y-m-d", $t);
$time2 = date("h:i:sa", $t2);
$time_total = $time2.' &nbsp&nbsp'.$time1;
echo $time_total;
?>