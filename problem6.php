<?php

$nr = 6;
echo "<br>Project Euler #$nr<br><br>";

$time_pre = microtime(true);

$res1 = 0;
$res2 = 0;
for($i=1;$i<=100;$i++)
{
	$res1 += pow($i,2);
	$res2 += $i;
}
$res2 = pow($res2,2);
echo $res2 - $res1;

$time_post = microtime(true) - $time_pre;
echo "<br><br>" . $time_post . " seconds";

include "solved.html";
include "navi.php";
?>