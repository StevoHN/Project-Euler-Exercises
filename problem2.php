<?php

$nr = 2;
echo "<br>Project Euler #$nr<br><br>";

$time_pre = microtime(true);

$x = 1;
$y = 2;
$z = 4000000;
$a = array();
while($x < $z or $y < $z)
{
	if($x%2==0){array_push($a,$x);}
	if($y%2==0){array_push($a,$y);}
	$x = $x + $y;
	$y = $x + $y;
}

echo "$x | $y";
echo "<pre>";
var_dump($a);
echo "</pre>";
echo array_sum($a);

$time_post = microtime(true) - $time_pre;
echo "<br><br>" . $time_post . " seconds";

include "solved.html";
include "navi.php";
?>