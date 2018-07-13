<pre>

<?php

	$n = rand(1, 1000);
	
	echo ("The range is from 1 to ".$n.":<br>");
	
	// Находим все суммы
	
	for($i = 1; $i <= $n; $i++){
		
		for($j = 1; $j <= ($i/2); $j++){

			if($i%$j == 0){

				$divisors[] = $j;
			}
		}

		$divisors[] = $i;

		$count = count($divisors);
		
		$sum = 0;
		
		for($j = 0; $j < $count; $j++){

			$sum += $divisors[$j];
		}
		
		$i_sums[$i] = $sum;
		
		unset($divisors);
	}

	// Высчитываем наибольшую сумму
	
	$biggest_sum = $number = 1;
	
	for($i = 1; $i <= $n; $i++){

		if($i_sums[$i] > $biggest_sum){
			
			$biggest_sum = $i_sums[$i];
			
			$number = $i;
		}
	}
	
	echo ($biggest_sum." is the biggest sum of ".$number." number in the range");

?>