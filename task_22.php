<pre>

<?php

	$n = $dividend = rand();

	echo ("The number is: ".$n."<br>");
	
	// Находим простые множители
	
	for($i = 2; $i < $n; $i++){

		if($dividend%$i == 0){

			$prime_factors[] = $i;
			
			$dividend = ($dividend/$i);
			
			$i = 1;
		}
	}
	
	// Вывод

	if(!$prime_factors){
		
		echo ("The number is a prime and has no prime factors <br>");
	}else{
	
		echo ("Prime factors of the number: <br>");
		
		var_dump ($prime_factors);
	}
?>
