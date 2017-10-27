<?php
include "preWrap.php";
$nr = 22;
echo "<br>Project Euler #$nr<br><br>";

$time_pre = microtime(true);
// Start

$fileName = "p022_names.txt";
$file = fopen($fileName,"r");
$names = fread($file,filesize($fileName));
$names = str_replace("\"","",$names);
$nA = explode(",",$names);
sort($nA);

$lA = array("A" => 1,
		   "B" => 2,
		   "C" => 3,
		   "D" => 4,
		   "E" => 5,
		   "F" => 6,
		   "G" => 7,
		   "H" => 8,
		   "I" => 9,
		   "J" => 10,
		   "K" => 11,
		   "L" => 12,
		   "M" => 13,
		   "N" => 14,
		   "O" => 15,
		   "P" => 16,
		   "Q" => 17,
		   "R" => 18,
		   "S" => 19,
		   "T" => 20,
		   "U" => 21,
		   "V" => 22,
		   "W" => 23,
		   "X" => 24,
		   "Y" => 25,
		   "Z" => 26);
//$alphabet = "abcdefghijklmnopqrstuvwxyz";

$res = 0;
for($i=0;$i<count($nA);$i++)
{
	
	$name = $nA[$i];
	$nameScore = 0;
	
	for($j=0;$j<strlen($name);$j++)
	{
		$nameScore += $lA[$name[$j]];
	}
	$res += ($nameScore * ($i+1));
}
echo $res;

?>


<?
// End
$time_post = microtime(true) - $time_pre;
echo "<br><br>" . $time_post . " seconds";

include "solved.html";
include "navi.php";
?>