<?php
$new = array();
$i = 1;
while(!($i == 10))
{

	$new[$i] = "$i,$i+1";
	$i= $i+1;
}
foreach ($new as $x=>$x_val) 
{
	echo $x."and its value is:".$x_val;
	echo "<br>";
}


?>