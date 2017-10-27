<?php

$nr = 7;
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

function findPrime($x)
{
	$number = 2; // Starting from 2 as it is the first prime number
	$primeCount = 0; // # of prime numbers that have been found
	do {
		// Use previous function to check if the number is prime
		if(isPrime($number))
		{
			$primeCount++; // If the number is prime, count one up
			$hPrime = $number; // Highest prime number found will be set to the current number
		}
		$number++; // Count one up to continue searching for primes
	} while($primeCount < $x);
	
	$ld = substr($x,(strlen($x) - 1),1); // $ln = Last Digit in the number
	switch($ld)
	{
		case 1:
			$ext = "st";
			break;
		case 2:
			$ext = "nd";
			break;
		case 3:
			$ext = "rd";
			break;
		default:
			$ext = "th";
			break;
	}
	echo "The " . $x . $ext . " prime is " . $hPrime;
}

// Find x prime number
findPrime(6);

$time_post = microtime(true) - $time_pre;
echo "<br><br>" . $time_post . " seconds";

include "solved.html";
include "navi.php";
?>