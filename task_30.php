<form action="task_30.php" method="get">

	<p>Введите натуральное число.</p>
	<input type="text" name="n">
	
</form>

<pre>

<?php

	$n = $_GET["n"];

	$natural_numbers_sequence = ((2*$n) - 1);
	
	for($i = $n; $i <= $natural_numbers_sequence; $i++){

		$numbers_array[] = $i;
	}
	
	$first_prime_number = $n;
	
	for($i = $n + 1; $i <= $natural_numbers_sequence; $i++){
		
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
				
				$twin_primes[] = $first_prime_number." and ".$last_prime_number;
		
			}

			$first_prime_number = $last_prime_number;
		}
	}

	echo ("Числа-близнецы последовательности от ".$n." до ".$natural_numbers_sequence."<br>");
	var_dump ($twin_primes);
?>
