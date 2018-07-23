<form action="task_30.php" method="get">

	<p>Введите натуральное число.</p>

	<input type="text" name="n">

</form>

<pre>

<?php

	$n = $_GET["n"];

	$sequence = ((2*$n) - 1);
	
	echo ("Числа-близнецы последовательности от ".$n." до ".$sequence."<br>");

	$first_prime_number = $n;
	
	for($i = $n + 1; $i <= $sequence; $i++){
		
		$check = true;
				
		for($j = 2; $j <= ($i/2); $j++){

			if($i%$j == 0){

				$check = false;
				
				continue 2;
			}
		}
		
		if($check){

			$last_prime_number = $i;
			
			if(($last_prime_number - $first_prime_number) == 2){
				
				echo ($first_prime_number." и ".$last_prime_number."<br>");
			}

			$first_prime_number = $last_prime_number;
		}
	}

?>
