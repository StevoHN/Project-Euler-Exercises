<?php

$nr = 15;
echo "<br>Project Euler #$nr<br><br>";

$time_pre = microtime(true);
// Start

$grid = array();
$gridsize = (empty($_GET['size']) ? 20 : $_GET['size']);
for($i=0;$i<=$gridsize;$i++)
{
	$grid[$i] = array();
	for($j=0;$j<=$gridsize;$j++)
	{
		$grid[$i][$j] = 0;
	}
}
for($i=0;$i<=$gridsize;$i++)
{
	$grid[$i][$gridsize] = 1;
}
for($i=0;$i<=$gridsize;$i++)
{
	$grid[$gridsize][$i] = 1;
}

for($i=($gridsize-1);$i>=0;$i--)
{
	for($j=($gridsize-1);$j>=0;$j--)
	{
		$grid[$i][$j] = $grid[$i+1][$j] + $grid[$i][$j+1];
	}
}

echo "<pre>";
//print_r($grid);
echo "</pre>";

$routes = $grid[0][0];
echo "In a " . $gridsize . "x" . $gridsize . " grid there will be $routes routes moving only two directions<br>";


// One of the solutions from Project Euler
/*$res = 1;
$n = 3; //Gridsize
for($i=1;$i<=$n;$i++)
{
	$res = $res * ($n+$i)/$i;
  //$res =    1 * ( 3+ 1)/ 1; //4
  //$res =    4 * ( 3+ 2)/ 2; //10
  //$res =   10 * ( 3+ 3)/ 3; //20
}
//echo $res;*/



?>
<style>
	table {
		border: 1px solid black;
		border-collapse: collapse;

	}
	td {
		border: 1px solid black;
		width:50px;
		height:50px;
	}
	
</style>
<table>
<tr>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
</tr>
</table>

<?
// End
$time_post = microtime(true) - $time_pre;
echo "<br><br>" . $time_post . " seconds";

include "solved.html";
include "navi.php";
?>