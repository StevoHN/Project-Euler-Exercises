<?php

$nr = 10;
echo "<br>Project Euler #$nr<br><br>";

$time_pre = microtime(true);

function isPrime($x)
{
	// One of the factors in a number will never be greater than the square root.
	$limit = sqrt($x);
	for($i=2;$i<=$limit;$i++)
	{
		if($x%$i == 0)
		{
			// If the number being tested can be divided by any other number, return false
			return false;
		}
	}
	// The number wasn't dividable, so it must be prime, return true
	return true;
}

$z = 200/*0000*/;
$res = 0;

for($i=2;$i<$z;$i++)
{
	if(isPrime($i))
	{
		$res += $i;
	}
}

echo $res;



$time_post = microtime(true) - $time_pre;
echo "<br><br>" . $time_post . " seconds";

include "solved.html";
include "navi.php";
?>