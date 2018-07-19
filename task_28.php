<pre>

<?php
	$n = rand(1, 10000);
	
	echo ("Число: ".$n."<br>");
	
	echo ("Цифры в порядке возрастания: <br>");

    
	function exponentiation($base, $exponent){
		
		for($i = $number = 1; $i <= $exponent; $i++){
			
			$number *= $base;
		}
		
		return $number;
	}
	
    for($i = 1; $i <= $n; $i++){

		$increasing_i = $i;

		for($j = 0; $increasing_i >= exponentiation(10, $j + 1);){

			$highest_order = (int)($increasing_i / exponentiation(10, $j + 2)) * exponentiation(10, $j + 2);

			$lower_order = (int)($increasing_i / exponentiation(10, $j)) % 10;
			
			$higher_order = (int)($increasing_i / exponentiation(10, ($j + 1))) % 10;
			
			$rest = $increasing_i % exponentiation(10, $j);
			
			if($lower_order > $higher_order){

				$increasing_i = (($highest_order) + 
				($lower_order * (exponentiation(10, $j + 1))) + 
				($higher_order * (exponentiation(10, $j))) + 
				($rest));
				
				$j = 0;

				continue;
			}
			
			$j++;
		}

		echo ($i." => ".$increasing_i."<br>");
	}
		
?>
