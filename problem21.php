<?php
include "preWrap.php";
$nr = 21;
echo "<br>Project Euler #$nr<br><br>";

$time_pre = microtime(true);
// Start

$lim = 10000; // Limit for searching through amicable numbers
$amicableNumbers = array(); // Array for storing amicable numbers
$checked = array(); // Array for storing numbers that have been checked. Cache

// Run through all numbers from 1 to $lim
for($i=1;$i<=$lim;$i++)
{
	// Check if the value has been cached
	if(empty($checked[$i]))
	{
		$tmpA = array(); // Temporary array for storing divisors
		
		// If $i is even, test all numbers for divisors. If $i is odd test every other number for divisors
		if($i%2==0)
		{
			$step = 1;
		}
		else
		{
			$step = 2;
		}
		
		// Run through all numbers from 1 to half of $i to find divisors
		for($j=1;$j<=sqrt($i);$j+=$step)
		{
			// If $i can be divided by $j, store it in the temporary array
			if($i%$j==0)
			{
				if($j==sqrt($i) || $j == 1)
				{
					array_push($tmpA,$j);
				}
				else
				{
					array_push($tmpA,$j);
					array_push($tmpA,($i/$j));
				}
			}
		}
		// Cache result. Sum of divisors will be stored in the checked array for the current number ($i)
		$checked[$i] = array_sum($tmpA);
	}
	// If the sum of the divisors is above the limit, skip to next iteration (continue)
	if($checked[$i] > $lim)
	{
		continue;
	}
	
	// Set temporary number ($tmpN) to the sum of divisors for current number
	$tmpN = $checked[$i];
	
	// If the sum of divisors for $tmpN has already been found, use it. Else find it
	if(empty($checked[$tmpN]))
	{
		// If $tmpN is even, test all numbers for divisors. If $tmpN is odd test every other number for divisors
		if($tmpN%2==0)
		{
			$step = 1;
		}
		else
		{
			$step = 2;
		}
		
		$tmpA = array();
		for($k=1;$k<=sqrt($tmpN);$k+=$step)
		{
			if($tmpN%$k==0)
			{
				if($k==sqrt($tmpN) || $k == 1)
				{
					array_push($tmpA,$k);
				}
				else
				{
					array_push($tmpA,$k);
					array_push($tmpA,($tmpN/$k));
				}
			}
		}
		$checked[$tmpN] = array_sum($tmpA);
	}
	
	// Set $num to the sum of divisors for $tmpN
	$num = $checked[$tmpN];
	
	// If $i equals the sum of the divisors of $i
	if($i==$num && $i!=$tmpN)
	{
		//echo "wooh $i | $tmpN<br>";
		array_push($amicableNumbers,$i);
	}
}
wrap($amicableNumbers);
$res = array_sum($amicableNumbers);
echo $res;
//wrap($checked);

?>


<?
// End
$time_post = microtime(true) - $time_pre;
echo "<br><br>" . $time_post . " seconds";

#include "solved.html";
include "navi.php";
?>