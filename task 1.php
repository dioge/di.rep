<pre><?php

	$n = rand();
	
	$count = 1;
	
	echo ("The number is ".$n."<br>");
	
	for($i = 10; $i < $n; $i *= 10){

		$count *= 10;
	}
	
	$quantity = 0;

	for($i = $count; $i >= 1; $i /= 10){

		$digit = floor($n/$i);
		
		$n -= $i*$digit;
		
		var_dump ($digit);
		
		if($digit < 5){
			
			$quantity++;
		}
	}
	
	echo ("Количество цифр, меньших 5, в числе: ".$quantity);
	
?>
