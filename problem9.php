<?php

$nr = 9;
echo "<br>Project Euler #$nr<br><br>";

$time_pre = microtime(true);


for($i=1;$i<999;$i++)
{
	for($j=1;$j<999;$j++)
	{
		$a = pow($i,2);
		$b = pow($j,2);
		$c = sqrt($a + $b);
		if($i + $j + $c == 1000)
		{
			break;
		}
	}
	if($i + $j + $c == 1000)
	{
		echo "$i + $j + $c = 1000<br>Product: " . ($i * $j * $c);
		break;
	}
}

$time_post = microtime(true) - $time_pre;
echo "<br><br>" . $time_post . " seconds";

include "solved.html";
include "navi.php";
?>