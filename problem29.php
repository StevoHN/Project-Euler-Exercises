<?php

$nr = 29;
echo "<br>Project Euler #$nr<br><br>";

$time_pre = microtime(true);
// Start

/*$nA = array();
for($i=2;$i<=100;$i++)
{
	for($j=2;$j<=100;$j++)
	{
		$num = pow($i,$j);
		if(!in_array($num,$nA))
		{
		}
		array_push($nA,$num);
	}
}*/
sort($nA);
echo "<pre>";
print_r($nA);
echo "</pre>";
//echo count($nA);
?>
<form action="#">
	<input type="number" placeholder="a"><br>
	<input type="number" placeholder="b"><br>
	<input type="submit" hidden>
</form>
<p></p>
<script src="http://peterolson.github.com/BigInteger.js/BigInteger.min.js"></script>
<script src="../js/jquery-3.2.1.min.js"></script>
<script>
	
	function calculate(a,b)
	{
		
	}

	$("form").submit(function(){
		var a = $("input")[0].value;
		var b = $("input")[1].value;
		console.log("a: " + a + " b: " + b);
		var nA = [];
		var num, count;
		for(i=2;i<=b;i++)
		{
			for(j=2;j<=b;j++)
			{
				num = bigInt(i).pow(j);
				num = num.toString();
				if(nA.indexOf(num) == "-1")
				{
					nA.push(num);
				}
			}
		}
		count = nA.length;
		$("p").html(count);
		console.log(count);
		return false;
	});

</script>
<?
// End
$time_post = microtime(true) - $time_pre;
echo "<br><br>" . $time_post . " seconds";

include "solved.html";
include "navi.php";
?>