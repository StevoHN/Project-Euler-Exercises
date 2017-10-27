<?php

$nr = 17;
echo "<br>Project Euler #$nr<br><br>";

$time_pre = microtime(true);
// Start
$numberWords = array("0" => "",
					 "00" => "",
					 "000" => "",
					 "0000" => "",
					 "1" => "one",
					 "2" => "two",
					 "3" => "three",
					 "4" => "four",
					 "5" => "five",
					 "6" => "six",
					 "7" => "seven",
					 "8" => "eight",
					 "9" => "nine",
					 "10" => "ten",
					 "11" => "eleven",
					 "12" => "twelve",
					 "13" => "thirteen",
					 "14" => "fourteen",
					 "15" => "fifteen",
					 "16" => "sixteen",
					 "17" => "seventeen",
					 "18" => "eighteen",
					 "19" => "nineteen",
					 "20" => "twenty",
					 "30" => "thirty",
					 "40" => "forty",
					 "50" => "fifty",
					 "60" => "sixty",
					 "70" => "seventy",
					 "80" => "eighty",
					 "90" => "ninety");
$numberSuffix = array("1" => "",
					 "2" => "",
					 "3" => "hundred",
					 "4" => "thousand");

function numberToLetters($num)
{
	global $numberSuffix;global $numberWords;
	$len = strlen($num);
	
	if($num <= 20 and $num > 0)
	{
		return $numberWords[$num];
	}
	else if($len >= 1 and $num > 0)
	{
		$tmp = substr($num,($len-1),1); //Getting the onner. Last digit in the number
		$onner = $numberWords[$tmp];
		
		if($len >= 2)
		{	
			$tmpPre = substr($num,($len-2),1) . "0"; //Getting the tenner ["1-9"] + "0"; Ex: 20
			if($tmpPre >= 10 and $tmpPre < 20)
			{
				$tenner = $numberWords[substr($num,($len-2),2)];
			}
			else
			{
				$tenner = $numberWords[$tmpPre] . $onner; //Combining the words from the tenner and onner. Ex: "ninety" . "one";	
			}
			

			$hundred = "";
			$thousand = "";

			if($len >= 3)
			{
				$tmpPre = substr($num,($len-3),1); //Get the number of hundred; ["1,2,3"]
				if($tmpPre == 0)
				{
					$hundred == "";
				}
				else
				{
					$tmpSuf = $numberSuffix["3"]; //Getting the highest number "group"; Ex: "hundred"
					if(!($num%100==0)){ $tmpSuf = $tmpSuf . "and"; } //If the number is not a whole hundred ["100,200,300..."] "and" will be appended	
					$hundred = $numberWords[$tmpPre] . $tmpSuf; //Put together number and hundred; "two" . "hundred" [ . "and"]
				}


				if($len >= 4)
				{
					$tmpPre = substr($num,($len-4),1);
					$tmpSuf = $numberSuffix[$len];
					$thousand = $numberWords[$tmpPre] . $tmpSuf;
				}
			}
			$letters = $thousand . $hundred . $tenner;
			return $letters;
		}
	}
	
	else
	{
		return false;
	}
}

function printLetters($x,$y)
{
	$letterArray = array();
	for($i=$x;$i<=$y;$i++)
	{
		$tmp = numberToLetters($i);
		array_push($letterArray,strlen($tmp));
		//array_push($letterArray,$tmp);
	}

	echo "<pre>";
	//print_r($letterArray);
	echo "</pre>";

	echo array_sum($letterArray);
}

printLetters(0,1000);

?>


<?
// End
$time_post = microtime(true) - $time_pre;
echo "<br><br>" . $time_post . " seconds";

include "solved.html";
include "navi.php";
?>