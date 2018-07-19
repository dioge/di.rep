<pre>

<?php

	$n = mt_rand();
	
	echo ("Число: <br>".$n."<br>");
	
	function exponentiation($base, $exponent){
		
		for($i = $number = 1; $i <= $exponent; $i++){
			
			$number *= $base;
		}
		
		return $number;
	}
	
	while($n >= exponentiation(10, $i)){
		
		$highest_order = (int)($n / exponentiation(10, $i + 2)) * exponentiation(10, $i + 2);

		$lower_order = (int)($n / exponentiation(10, $i)) % 10;
		
		$higher_order = (int)($n / exponentiation(10, ($i + 1))) % 10;
		
		$rest = $n % exponentiation(10, $i);

		if($lower_order < $higher_order){
			
			$n = (($highest_order) + 
			($lower_order * (exponentiation(10, $i + 1))) + 
			($higher_order * (exponentiation(10, $i))) + 
			($rest));
			
			$i = 0;
			
			continue;
		}
		
		$i++;
	}	
	
	echo ("Цифры в порядке возрастания: <br>".$n);
	
?>
