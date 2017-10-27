<?php
include "preWrap.php";
$nr = 67;
echo "<br>Project Euler #$nr<br><br>";

$time_pre = microtime(true);
// Start

$tmp = array();
$fileName = "p067_triangle.txt";
$file = fopen($fileName,"r");
$triangle = fread($file,filesize($fileName));
fclose($file);
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

include "solved.html";
include "navi.php";
?>