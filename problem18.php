<?php
include "preWrap.php";
$nr = 18;
echo "<br>Project Euler #$nr<br><br>";

$time_pre = microtime(true);
// Start
$tmp = array();
$triangle = "75
95 64
17 47 82
18 35 87 10
20 04 82 47 65
19 01 23 75 03 34
88 02 77 73 07 63 67
99 65 04 28 06 16 70 92
41 41 26 56 83 40 80 70 33
41 48 72 33 47 32 37 16 94 29
53 71 44 65 25 43 91 52 97 51 14
70 11 33 28 77 73 17 78 39 68 17 57
91 71 52 38 17 14 91 43 58 50 27 29 48
63 66 04 68 89 53 67 30 73 16 69 87 40 31
04 62 98 27 23 09 70 98 73 93 38 53 60 04 23";
$tmp = explode(PHP_EOL,$triangle);

for($i=0;$i<count($tmp);$i++)
{
	$tmp[$i] = explode(" ", $tmp[$i]);
}

$len = count($tmp) - 2;
for($i=$len;$i>=0;$i--)
{
	$tmpLen = count($tmp[$i]);
	for($j=0;$j<=$tmpLen;$j++)
	{
		$tmp[$i][$j] = $tmp[$i][$j] + max($tmp[$i+1][$j],$tmp[$i+1][$j+1]);
	}
}
//wrap($tmp);
echo $tmp[0][0];
?>


<?
// End
$time_post = microtime(true) - $time_pre;
echo "<br><br>" . $time_post . " seconds";

#include "solved.html";
include "navi.php";
?>