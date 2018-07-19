<?php

	$first_prime_number = 2;
	
	echo ("Парные простые числа: <br>");

	for($i = 2;; $i++){
		
		for($j = 2; $j <= ($i/2); $j++){

			if($i%$j == 0){

				continue 2;
			}
		}
		
		$last_prime_number = $i;
		
		if(($last_prime_number - $first_prime_number) == 2){
			
			echo ($first_prime_number." и ".$last_prime_number."<br>");
	
			if($count++ == 9){

				break;
			}
		}

		$first_prime_number = $last_prime_number;
	}

?>
