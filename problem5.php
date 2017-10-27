<?php

$nr = 5;
echo "<br>Project Euler #$nr<br><br>";

$time_pre = microtime(true);


function isDiv($x,$y)
{
	for($i=$y;$i>0;$i--)
	{
		if(!($x%$i==0))
		{
			return false;
		}
	}
	return true;
}

// $divisableBy is the number for which how many numbers the desired number is divisable by. The number returned will be divisable by all the number up to and including the $divisableBy variable. If set to 10, the returned number will be divisable by all the number from 1-10.
$divisableBy = 10; // 20;
$number = $divisableBy;
do {
	$number += $divisableBy;
} while(!isDiv($number,$divisableBy));
echo $number;

$time_post = microtime(true) - $time_pre;
echo "<br><br>" . $time_post . " seconds";

include "solved.html";
include "navi.php";
?>