<?php
include "preWrap.php";
$nr = 23;
echo "<br>Project Euler #$nr<br><br>";

$time_pre = microtime(true);
// Start

$abundantNumbers = array();
$tmpA;
$lim = 28123;
$lim = 100;
for($i=1;$i<$lim;$i++)
{
	$tmpA = array();
	for($j=1;$j<=sqrt($i);$j++)
	{
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
	$tmpN = array_sum($tmpA);
	if($tmpN > $i)
	{
		array_push($abundantNumbers,$i);
	}
}


//$count = 0;
//for($i=1;$i<$lim;$i++)
//{
//	for($j=0;$j<count($abundantNumbers);$j++)
//	{
//		if(array_search(($i-$abundantNumbers[$j]),$abundantNumbers))
//		{
//			$count++;
//		}
//	}
//}
$x=0;
$sums = array();
$count = count($abundantNumbers);
for($i=0;$i<$count;$i++)
{
	$num = $abundantNumbers[$i];
	for($j=0;$j<$count;$j++)
	{
		$add = $num + $abundantNumbers[$j];
		if(!array_search($add,$sums))
		{
			array_push($sums,$add);
		}
		$x++;
	}
}
echo $count;
sort($sums);
wrap($sums);

if($lim<=100){wrap($abundantNumbers);}

// If ($i - [abundant_number]) is in abundant_number array
?>


<?
// End
$time_post = microtime(true) - $time_pre;
echo "<br><br>" . $time_post . " seconds";

#include "solved.html";
include "navi.php";
?>