<?php

$nr = 30;
echo "<br>Project Euler #$nr<br><br>";

$time_pre = microtime(true);
// Start
//$number = $_GET['number'];
//$numbers = str_split($number);
$limit;
$tmpNum = 9;
$count = 1;
$resArray = array();

do {
	$tmpNum = str_pad("",$count,"9");
	$limit = pow(9,5) * $count;
	$count++;
} while($limit > $tmpNum);
echo "<br>Limit: $limit | Number: $tmpNum<br>";


for($i=2;$i<$limit;$i++)
{
	$res = 0;
	$numbers = str_split($i);
	$len = count($numbers);
	for($j=0;$j<$len;$j++)
	{
		$numbers[$j] = pow($numbers[$j],5);
		$res += $numbers[$j];
	}
	if($i == $res)
	{
		array_push($resArray,$i);
	}
}
echo "<br>";
print_r($resArray);
$res = array_sum($resArray);
echo "<br>Result: $res | Length: $len";
?>
<form>
	<input type="number" name="number">
</form>

<?
// End
$time_post = microtime(true) - $time_pre;
echo "<br><br>" . $time_post . " seconds";

#include "solved.html";
include "navi.php";
?>