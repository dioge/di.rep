<pre>

<?php

	$n = rand();

	$m = rand();

	echo ("The numbers are: n ".$n." and m ".$m."<br>");
	
	
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
	
	for($i = 0; $i < $n_count; $i++){
		
		$n_last = $n_count - $i - 1;
		
		for($j = 0; $j < $m_count; $j++){
		
			$m_last = $m_count - $j - 1;

			if($n_divisors[$n_last] == $m_divisors[$m_last]){

				$gcd = $n_divisors[$n_last];
				break 2;
			}
		}
	}

	echo ("The greatest common divisor is ".$gcd."<br>");
	
	var_dump($n_divisors);
	
	var_dump($m_divisors);

?>