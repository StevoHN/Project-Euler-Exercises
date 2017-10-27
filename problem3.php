<?php

$nr = 3;
echo "<br>Project Euler #$nr<br><br>";

$time_pre = microtime(true);

function isPrime($x)
{
	// If the number is even, it is not prime, unless the number is 2.
	if($x%2 == 0)
	{
		if($x == 2)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	// One of the factors in a number will never be greater than the square root.
	$limit = sqrt($x);
	for($i=3;$i<=$limit;$i+=2)
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

$res = 1; // Result variable. Will be counting up to check against $hum. Setting it to 1 will make it equal to the first factor
$hum = 600851475143; // Humungous number
$limit = $hum/2; // Cutting down the limit in case of mistakes
$nA = array(); // Array for storing the prime factors
for($i=2;$i<=$limit;$i++)
{
	if(isPrime($i))
	{
		if($hum%$i==0)
		{
			array_push($nA,$i);
			$res = $res * $i;
			if($res == $hum)
			{
				echo "<pre>";
				print_r($nA);
				echo "</pre>";
				break;
			}
			else
			{
				$limit = $hum / $res; // Lowering for loop limit in case $hum doesn't only have prime factors.
			}
		}
	}
}

$time_post = microtime(true) - $time_pre;
echo "<br><br>" . $time_post . " seconds";

include "solved.html";
include "navi.php";
?>