<pre>

<?php

	$first_prime_number = 2;

	for($i = 2;; $i++){
		
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
		
				if(count($twin_primes) == 10){
				
					break;
				}
			}

			$first_prime_number = $last_prime_number;
		}
	}

	var_dump ($twin_primes);
?>
