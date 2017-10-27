<?php
include "preWrap.php";
$nr = 25;
echo "<br>Project Euler #$nr<br><br>";

$time_pre = microtime(true);
// Start

//$x = 1;
//$y = 1;
//array_push($nA,$x);
//array_push($nA,$y);
//echo "$x<br>$y<br>";
//$nA = array();
//do {
//	$x += $y;
//	$y += $x;
//	array_push($nA,$x);
//	array_push($nA,$y);
//	$len = strlen($x);
//	//echo "$x<br>$y<br>";
//} while($len < 7);
//
//wrap($nA);
?>
<script src="http://peterolson.github.com/BigInteger.js/BigInteger.min.js"></script>
<script src="../js/jquery-3.2.1.min.js"></script>
<script>
	var x = bigInt(1);
	var y = bigInt(1);
	var nA = [];
	var len;
	
	nA.push(x);
	nA.push(y);
	
	function findFib(lim)
	{
		nA = [];
		x = bigInt(1);
		y = bigInt(1);
		do {
			x = bigInt(y).add(bigInt(x));
			y = bigInt(x).add(bigInt(y));

			xS = x.toString();
			yS = y.toString();

			nA.push(xS);
			nA.push(yS);

			len = xS.length;
		} while(len < lim);
	}



</script>
<?
// End
$time_post = microtime(true) - $time_pre;
echo "<br><br>" . $time_post . " seconds";

#include "solved.html";
include "navi.php";
?>