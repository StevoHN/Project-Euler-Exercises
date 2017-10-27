<?php

$nr = 20;
echo "<br>Project Euler #$nr<br><br>";

$time_pre = microtime(true);
// Start

/*$z = 100;
$num = $z;
for($i=$z;$i>0;$i--)
{
	$num = $num * $i;
}*/
//echo $num;

?>
<p id="result"></p>
<script src="../js/BigInt.min.js"></script>
<script src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
	function add(a,b)
	{
		return Number(a) + Number(b);
	}
	var z = bigInt(100);
	var num = z;
	for(i=z;i>0;i--)
	{
		num = bigInt(num).times(i);
	}
	num = num.toString();
	num = num.split("");
	num = num.reduce(add);
	$("#result").html(num);



</script>

<?
// End
$time_post = microtime(true) - $time_pre;
//echo "<br><br>" . $time_post . " seconds";

include "solved.html";
include "navi.php";
?>