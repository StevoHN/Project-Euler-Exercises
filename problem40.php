<?php
include "preWrap.php";
$nr = 40;
echo "<br>Project Euler #$nr<br><br>";

$time_pre = microtime(true);
// Start

$numString = "0.";
$i = 1;
$nA = array();
do {
	$numString .= $i;
	$i++;
	$len = strlen($numString);
} while($len < (1000000 + 2));
//echo $numString;

$digit = 1;
for($i=1;$i<=7;$i++)
{
	$digit = str_pad($digit,$i,"0");
	array_push($nA,$numString[$digit + 1]);
}
wrap($nA);

$res = 1;
for($i=0;$i<count($nA);$i++)
{
	$res = $res * $nA[$i];
//	echo "<br>" . $nA[$i];
}
echo "<br>$res";
?>
<?
// End
$time_post = microtime(true) - $time_pre;
echo "<br><br>" . $time_post . " seconds";

include "solved.html";
include "navi.php";
?>