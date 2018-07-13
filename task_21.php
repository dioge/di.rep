<pre>

<?php

	$n = rand();

	$m = rand();

	echo ("The numbers are ".$n." and ".$m."<br>");
	
	
	// Делители n
	
	for($i = 1; $i <= ($n/2); $i++){

		if($n%$i == 0){

			$n_divisors[] = $i;
		}
	}

	$n_divisors[] = $n;

	// Делители m
		
	for($i = 1; $i <= ($m/2); $i++){

		if($m%$i == 0){

			$m_divisors[] = $i;
		}
	}

	$m_divisors[] = $m;

	// Поиск наибольшего общего делителя
	
	$n_count = count($n_divisors);

	$m_count = count($m_divisors);
	
	$check = true;
	
	for($i = 0; $i < $n_count; $i++){
		
		for($j = 0; $j < $m_count; $j++){
		
			if($n_divisors[$i] != 1 && $n_divisors[$i] == $m_divisors[$j]){

				$check = false;
				
				echo ("The numbers are coprime integers, they have at least one more common divisor: ".$n_divisors[$i]."<br>");
				
				break 2;
			}
		}
	}

	if($check){
		
		echo ("The numbers are not coprime integers, they have no common divisor: <br>");
	}
	
	var_dump($n_divisors);
	
	var_dump($m_divisors);

?>