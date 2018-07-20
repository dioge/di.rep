
<pre>

<?PHP
	
	$n = $count = 123;
	
	while($count > 0){
		
		$count = (int)($count / 10);
		
		$digit_number++;
	}
	
	function exponentiation($base, $exponent){
		
		for($i = $number = 1; $i <= $exponent; $i++){
			
			$number *= $base;
		}
		
		return $number;
	}
	
	function get_combinations($number, $limit = 1, $digits_sum = "", $digits){

		if($limit == $digits){
			
			return;
		}

		for($i = 0; $i < $limit; $i++){
			
			$sum = $digits_sum;
		
			$order = exponentiation(10, $i);
			
			$digit = ((int)($number / $order)) % 10;
			
			$sum .= $digit;
			
			echo $sum."<br>";

			get_combinations((int)($number / 10), $limit + 1, $sum, $digits);
			
		}
		
		if((int)($number / 10) > 0 && $digits_sum == ""){
			
			// var_dump ($number);
			// var_dump ($digits_sum);
			get_combinations((int)($number / 10), 1, "", $digits);
		}
	}

	get_combinations($n, 1, "", $digit_number);

?>
