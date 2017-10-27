<?php

$nr = 12;
echo "<br>Project Euler #$nr<br><br>";

/*$time_pre = microtime(true);

set_time_limit(0);

$number = 1;
$count = 2;
$limit = sqrt($number);

do {
	$number += $count;
	$count++;
	$limit = sqrt($number);
	$divisors = 0;
	//$divArray = array();
	for($i=1;$i<=$limit;$i++)
	{
		if($number%2 != 0)
		{
			break;
		}
		if($number%$i==0)
		{
			$divisors += 2;
			//array_push($divArray,$i);
		}
	}
} while($divisors < 500);

echo $number;
echo "<pre>";
//print_r($divArray);
echo "</pre>";



$time_post = microtime(true) - $time_pre;
echo "<br><br>" . $time_post . " seconds<br>";*/
?>
<input type="number" id="number"><button onclick="findDiv()">Run</button>
<script src="../js/jquery-3.2.1.min.js"></script>
<script>
	function findDiv()
	{
		
		var findDivs = $("#number").val();
		if(findDivs == "" || findDivs <= 0)
		{
			findDivs = 10;
		}
		console.log("Finding triangular number with " + findDivs + " divisors");
		var number = 1;
		var limit = Math.sqrt(number);
		var count = 2;
		var divisors;
		//var divArray;
		do {
			number += count;
			//limit = Math.ceil(number/2);
			limit = Math.sqrt(number);
			count++;
			//console.log("Number: " + number + " | Count: " + count);
			divisors = 0;
			//divArray = [];
			for(i = 1; i <= limit ; i++)
			{
				if(number%2 != 0)
				{
					break;
				}
				if(number%i == 0)
				{
					divisors += 2;
					//divArray.push(i);
				}
			}
		} while(divisors < findDivs);
		//divArray.push(number);
		console.log("Number: " + number + " | Divisors: " + divisors);
		//console.log(divArray);
	}
	
	$("#number").change(function(){
		findDiv();
	})
</script>



<?php
echo "<img src='problem12.png'><img src='problem12_2.png'><img src='problem12_3.png'><br>";
echo "Took 28 minutes but it worked :D:D:D<br>";
echo " - Second try was faster, being 'only' 7 minutes. Still pretty slow, but better than last time<br>";
echo " - Third and final solution is way faster. Setting the limit to the square root of the number<br>";
include "solved.html";
include "navi.php";
?>