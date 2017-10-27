<?php

$nr = 28;
echo "<br>Project Euler #$nr<br><br>";

$time_pre = microtime(true);
// Start

$dir = "right";
$gridsize = (empty($_GET['size']) ? 5 : $_GET['size']);
if($gridsize%2 == 0)
{
	$gridsize++;
}
$limit = pow($gridsize,2);
$center = floor($gridsize/2);
$grid = array();

$row = $center;
$column = $center;
$count = 1;
$moves;
$moveCount;

function checkDir()
{
	global $dir;global $row;global $column;
	
	switch($dir)
	{
		case "right":
			$column++;
			break;
		case "down":
			$row++;
			break;
		case "left":
			$column--;
			break;
		case "up":
			$row--;
			break;
	}
}
function switchDir()
{
	global $dir;
	
	switch($dir)
	{
		case "right":
			$dir = "down";
			break;
		case "down":
			$dir = "left";
			break;
		case "left":
			$dir = "up";
			break;
		case "up":
			$dir = "right";
			break;
	}
}
$numberOfMoves = floor($gridsize/2)*4+1;
for($i=0;$i<$numberOfMoves;$i++)
{
	$totalMoves = floor($i/2) + 1;
	$moves = 0;
	do {
		$grid[$row][$column] = $count;
		checkDir();
		$moves++;
		$count++;
	} while($moves < $totalMoves);
	switchDir();
}
?>
<style>
	td {
		text-align: center;
	}
	td:nth-child(odd) {
		background-color:rgba(0,255,0,0.05);	
	}
	tr:nth-child(odd) {
		background-color:#ffcec9;
	}
	tr:nth-child(even) {
		background-color:#c9f3ff;
	}
</style>
<?
echo "Printing Grid<br>";
echo "<table>";
for($i=0;$i<$gridsize;$i++)
{
	echo "<tr>";
	for($j=0;$j<$gridsize;$j++)
	{
		$cell = $grid[$i][$j];
		echo "<td>$cell</td>";
		//echo $j;
	}
	echo "</tr>";
}
echo "</table>";

// /*   This is the actual solution to the problem   */
//$size = 1001;
//$limit = floor($size/2-1);
//$resArray = array();
//
//for($i=0;$i<=3;$i++)
//{
//	$x = ($i+1) * 2;
//	$count = 0;
//	$num = 0;
//	$resArray[$i] = array();
//	for($j = $x;$count<=$limit;$j+=8)
//	{
//		$num += $j;
//		array_push($resArray[$i],$num + 1);
//		$count++;
//	}
//	$res += array_sum($resArray[$i]);
//}
//
//echo "<pre>";
////echo print_r($resArray);
//echo "</pre>";
//
//echo "<br>" + $res + 1;
?>

<?
// End
$time_post = microtime(true) - $time_pre;
echo "<br><br>" . $time_post . " seconds";

include "solved.html";
include "navi.php";
?>