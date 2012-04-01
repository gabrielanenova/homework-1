<!DOCTYPE html>
<html>
    <head>
        <title> homework 1</title>
      
    </head>
	<body> 
<?php
		
		if(!is_numeric($_GET["number"])) //проверка дали параметъра е число
			{
				echo "<font color='red'>The parameter is not a number !</font>";
				return;
			}
		function isInRange($temp)  //проверка дали е в границите [0,19999]
			{
				if($_GET["number"]>=0 && $_GET["number"]<=19999) return true;
				else return false;
			}
		if(!(isInRange($_GET["number"])))
			{
				echo"<font color='red'> The parameter is not within the range [0,19999] </font>";
			}
		function isPrime($temp) //проверка дали числото е просто
		{	
			$count=0;
			if($temp==0 || $temp==1) return false;
			else
				
				for($i=2;$i<=$temp;$i++)
				{	
					if($temp%$i==0) $count++;
				}
				if($count==1) return true;
		}
		
		if(isPrime($_GET["number"]))
			echo 'The number '  .$_GET["number"].  ' is prime!';
		else echo "<font color='blue'> The number " .$_GET["number"]. " is NOT prime </font>";
		?>
		</body>
		</html>
	
		

		
		
		