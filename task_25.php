<pre>

<?php

	// $n = rand(1, 9);
	$n = 11;
	
	echo ("The range is from 1 to ".$n.":<br>");
	
	for($i = 1; $i <= $n; $i++){
		
		$i .= "";
		
		$length = strlen($i);
		
		// $j_factorial_sum = 0;
		
		for($j = 0; $j < $length; $j++){

			$k_factorial = 1;
			
			for($k = 1; $k <= $i[$j]; $k++){
				
				$k_factorial *= $k;
				// var_dump($k);
			}
			
			$j_factorial_sum += $k_factorial;
	var_dump ($k_factorial);
		}
		
		$i_array[$i] = $j_factorial_sum;
	}

	var_dump ($i_array);
	
	// Высчитываем наибольшую сумму
	
	// $biggest_sum = $number = 1;
	
	// for($i = 1; $i <= $n; $i++){

		// if($i_sums[$i] > $biggest_sum){
			
			// $biggest_sum = $i_sums[$i];
			
			// $number = $i;
		// }
	// }
	
	// echo ($biggest_sum." is the biggest sum of ".$number." number in the range");

?>