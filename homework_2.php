<!DOCTYPE html>
<html>
    <head>
        <title> homework 2</title>
    </head>
	<body> 
		<?php
		$myArr=range(20,1000,37); //��������� ����� �� 20 �� 1000 ��� ������ 37
		//print_r($myArr);
		function isPrime($temp)	  //�������, ����� ��������� ���� ������� � ������
		{	
			$count=0;
			if($temp==0 || $temp==1) return false;
			else
				{
				for($i=2;$i<=$temp;$i++)
				{	
					if($temp%$i==0) $count++;
				}
				if($count==1) return true;
		}}
		function find_3_prime($x)  //�������, �������� ������� ������ ����� � ������
		{
			$var;
			$temp=0;
			foreach($x as $value)
			{
				if(isPrime($value) and $temp==3) echo "The third prime number:" .$value;
				else $temp++;
			}
		}
		find_3_prime($myArr);
		
		function check_exists($x)   //�������, ����� ��������� ���� ������� 146,284,871 �� �������� � ������
		{
			if(in_array(146,$x)) echo "The number 146 exists in the array.<br>" ;
			else echo "The number 146 does not exist in the array.<br>";
		
			if(in_array(284,$x)) echo "The number 284 exists in the array.<br>";
			else echo "The number 284 does not exist in the array.<br>";
			
			if(in_array(871,$x)) echo "The number 871 exists in the array.<br>";
			else echo "The number 871 does not exist in the array.<br>";
		}
		check_exists($myArr);
		?>
	</body>
</html>