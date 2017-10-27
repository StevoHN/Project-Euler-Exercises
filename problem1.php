<?php

$nr = 1;
echo "<br>Project Euler #$nr<br><br>";

$time_pre = microtime(true);

$res = 0;

for($i=1;$i<1000;$i++)
{
	if($i%5==0 || $i%3==0)
	{
		echo " $i -";
		$res = $res + $i;
	}
}

echo " $res";

$time_post = microtime(true) - $time_pre;
echo "<br><br>" . $time_post . " seconds";

include "solved.html";
include "navi.php";
?>