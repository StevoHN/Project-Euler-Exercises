<?php

$nr = 14;
echo "<br>Project Euler #$nr<br><br>";

$time_pre = microtime(true);
// Start

/*$z = 100000;
$hCount = 0;
$hNumber = 0;
for($i=1;$i<$z;$i++)
{
	$number = $i;
	$count = 1;
	//$nA = array();
	//array_push($nA,$number);
	do {
		if($number%2==0)
		{
			$number = $number/2;
		}
		else
		{
			$number = ($number * 3) + 1;
		}
		$count++;
		//array_push($nA,$number);
	} while($number != 1);
	if($count>$hCount)
	{
		$hCount = $count;
		$hNumber = $i;
		//$hNa = $nA;
	}
}

echo "$hNumber has the highest chain of $hCount";
echo "<pre>";
//print_r($hNa);
echo "</pre>";*/
?>
<input type="number" name="number" id="number">
<p id="result"></p>
<script src="../js/jquery-3.2.1.min.js"></script>
<script>

	function collatz(z)
	{
		var cnt = 1;var hCnt = 0;var num;var hNum = 0;
		
		for(i=1;i<z;i++)
		{
			num = i;
			cnt = 1;
			do {
				if(num%2==0)
				{
					num = num/2;
				}
				else
				{
					num = (num*3)+1;
				}
				cnt++;
			} while(num != 1);
			
			
			if(cnt>hCnt)
			{
				hCnt = cnt;
				hNum = i;
			}
		}
		$("#result").html(hNum + " has the highest chain of " + hCnt);
	}

	$("#number").change(function(e){
		collatz(e.target.value);
	});


</script>
<?php
// End
$time_post = microtime(true) - $time_pre;
echo "<br><br>" . $time_post . " seconds";

include "solved.html";
include "navi.php";
?>