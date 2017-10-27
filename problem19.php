<?php
include "preWrap.php";
$nr = 19;
echo "<br>Project Euler #$nr<br><br>";

$time_pre = microtime(true);
// Start

/*function isLeapYear($year)
{
	global $year;global $daysInMonth;
	if($year%4==0)
	{
		if($year%100==0)
		{
			if($year%400==0)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return true;
		}
	}
	else
	{
		return false;
	}
}

$daysInMonth = array(31,28,31,30,31,30,31,31,30,31,30,31);
$months = array("jan","feb","mar","apr","may","jun","jul","aug","sep","oct","nov","dec","jan");
$startYear = 1900;
$endYear = 2000;
$firstDay = 0; // Day of January 1st in startYear. 0-based (Monday = 0, Tuesday = 1 etc.)
$sundayCount = 0;

$month = $months[0];
$year = $startYear;
echo "<table>";
if($firstDay == 6)
{
	$sundayCount++;
	echo "<tr><td>$month</td><td>$year</td></tr>";
}

for($i=$startYear;$i<=$endYear;$i++)
{
	if(isLeapYear($i))
	{
		$daysInMonth[1] = 29;
	}
	else
	{
		$daysInMonth[1] = 28;
	}
	for($j=0;$j<=11;$j++)
	{		
		if($firstDay == 1)
		{
			$month = $months[$j];
			$sundayCount++;
			echo "<tr><td>$month</td><td>$i</td><td>$days</td><td>$firstDay</td></tr>";
			
		}
		$days = $firstDay;
		do {
			$days += 7;
		} while(($days + 7) < $daysInMonth[$j]);
		$firstDay = 7 - ($daysInMonth[$j] - $days);
	}
}
echo "</table>";
echo $sundayCount;*/

$startYear = 1901;
$endYear = 2000;
$months = array("jan","feb","mar","apr","may","jun","jul","aug","sep","oct","nov","dec");
for($i=$startYear;$i<=$endYear;$i++)
{
	for($j=0;$j<=11;$j++)
	{
		$month = $months[$j];
		$stringDate = strtotime("$month 1 $i");
		$day = date("l",$stringDate);
		if($day == "Sunday")
		{
			$sundayCount++;
		}
	}
}
echo $sundayCount;

?>


<?
// End
$time_post = microtime(true) - $time_pre;
echo "<br><br>" . $time_post . " seconds";

// First solution is pretty wonky, but got annoyed LuL;
// Second solution utilizes the date function;
include "solved.html";
include "navi.php";
?>