<?php
	
	function sayHello()
	{
		echo "Hello! Welcome to my website!" . "<br>";
		date_default_timezone_set("America/New_York");
		// print date("m/d/y G.i:s<br>", time());
   		print "Today is ";
   		print date("m/d/Y");
   		echo "<br>";
   		print date("g:i a");

	}

	

?>

