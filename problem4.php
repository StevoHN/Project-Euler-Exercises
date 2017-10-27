<?php

$nr = 4;
echo "<br>Project Euler #$nr<br><br>";

$time_pre = microtime(true);

function isPalin($x)
{
	$len = strlen($x);

	$count = 0;
	$lim = floor($len/2);
	for($i=0;$i<$lim;$i++)
	{
		$to = $len-($i+1);
		if(substr($x,$i,1) == substr($x,$to,1))
		{
			$count++;
		}
	}
	if($count == $lim)
	{
		return true;
	}
	else
	{
		return false;
	}
}

$forLim = 99;
for($i=999;$i>$forLim;$i--)
{
	for($j=999;$j>$forLim;$j--)
	{
		$product = $i * $j;
		if(isPalin($product))
		{
			$forLim = $j; // This will limit the for loop to when a palindrome has been found. This makes sure that it will never use any lower numbers than already used.
			if($product > $hProduct)
			{
				$hProduct = $product;
			}
			break;
		}
	}
}
echo "<br><br>The largest Palindrome is: " . $hProduct;



$time_post = microtime(true) - $time_pre;
echo "<br><br>" . $time_post . " seconds";

include "solved.html";
include "navi.php";
?>