<style>
	body {
		background-color: white;
	}
	.include {
		display: block;
		margin-top:30px;
		margin-left:30px;
	}
	.include div {
		display: inline-block;
	}
	a {
		text-decoration: none;
		margin-right:20px;
	}
	#problemLink {
		display:inline-block;
		font-family: arial;
		border: 3px solid blue;
		padding:10px;
	}
	#goToP {
		padding:5px;
		font-size:15px;
	}
</style>


<?php 
/*
$problem = $_SERVER['PHP_SELF']; 
$pos = strpos($problem,"problem") + strlen("problem");
$len = strlen($problem) - 4 - $pos;
$current = substr($problem,$pos,$len);
$last = "problem" . ($current - 1) . ".php";
$next = "problem" . ($current + 1) . ".php";
*/
?>


	

<div class="include">
	<!--<?php
	if(file_exists($last))
	{
	?>
	<div class="previous">
		<a href="<?php echo $last ?>">← Last</a>
	</div>
	<?php
	}
	?>
	<?php
	if(file_exists($next))
	{
	?>
	<div class="next">
		<a href="<?php echo $next ?>">Next →</a>
	</div>
	<?php
	}
	
	?>-->
	<form action="redirect.php" method="post">
		<input type="text" name="goToP" id="goToP" placeholder="Go To Problem ... ">
	</form>
	<br>
	<a id="problemLink" href="https://projecteuler.net/problem=<?php echo $nr ?>" target="_blank">Problem on Project Euler</a>
	
	
</div>