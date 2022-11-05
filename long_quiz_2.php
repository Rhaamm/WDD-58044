<html>
	<head>
		<title>Long Quiz 2: Web Design Lab</title>
	</head>
	<body>
		<?php
				echo "Problem 1: <br><br>";
				$salary_rate = 600;
				$salary = 15 * $salary_rate;
				$taxable_amount = 0.30 * $salary;
				$net_pay = $salary - $taxable_amount;

				//output
				echo "Salary Rate: ".$salary_rate." per day <br>";
				echo "Salary: " .$salary."<br>";
				echo "Taxable amount: " .$taxable_amount."<br>";
				echo "Net pay: " .$net_pay."<br><br>";


  	echo "Problem 2: <br><br>";
	$sum=0; 
	for ($i=1; $i<=50; $i++) 
	{ $sum=$sum+$i; } 
	echo "The total of the positive integers from 1 to 50 = ". ($sum) . "<br/>";

?>
