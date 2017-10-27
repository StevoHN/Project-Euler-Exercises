<?php

$nr = 0;
echo "<br>Project Euler #$nr<br><br>";

$time_pre = microtime(true);
// Start
/*$num = pow(2,1000);
$nA = str_split($num);
echo "<pre>";
print_r($nA);
echo "</pre>";
echo array_sum($nA);*/
?>
<p id="result"></p>
<script src="../js/BigInt.min.js"></script>
<script src="../js/jquery-3.2.1.min.js"></script>
<script>
function add(a, b)
{
	return Number(a) + Number(b);
}
	
var num = bigInt(2).pow(1000);
num = num.toString();
num = num.split("");
num = num.reduce(add,0);
$("#result").html(num);

</script>
<?
// End
$time_post = microtime(true) - $time_pre;
echo "<br><br>" . $time_post . " seconds";

include "solved.html";
include "navi.php";
?>