<pre><?php

	function exponentiation($base, $exponent){
		
		for($i = $number = 1; $i <= $exponent; $i++){
			
			$number *= $base;
		}
		
		return $number;
	}
	
	echo ("Комбинации:<br>");

	function get_combinations($number = 7320, $limit = 3, $combination = 0){
		
		if($combination > 1000){
			
			echo ($combination."<br>");
		}
			
		for($i = 0; $i <= $limit; $i++){
			
			$digit = $number % 10;
			
			get_combinations((int)($number / 10), $limit - 1, ($combination * 10) + $digit);
			
			$number = (($digit * exponentiation(10, $limit)) + (int)($number / 10));
		}
	}
	
	get_combinations();
?>
