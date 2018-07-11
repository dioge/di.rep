<pre>

<?php

	// Массив цифр, составляющих число

	$number .= rand();
	// $number = (string) 625;

	var_dump($number);
	
	$n_length = strlen($number);
	
	for($i = 0; $i < $n_length; $i++){

		$n_array[] = $number[$i];
	}
	
	// Массив цифр, составляющих квадрат числа

	$square_number .= $number*$number;

	var_dump($square_number);
	
	$sn_length = strlen($square_number);
	
	for($i = 0; $i < $sn_length; $i++){

		$sn_array[] = $square_number[$i];
	}

	// Проверка на автоморфность
	
	for($i = 0; $i < $n_length; $i++){
		
		$n_digit = ($n_length - 1) - $i;
		$sn_digit = ($sn_length - 1) - $i;
		
		if($n_array[$n_digit] !== $sn_array[$sn_digit]){
		
			break;
		}
		if($i == ($n_length - 1)){
			
			echo ($number." is an automorphic number. Square number is ".$square_number);
		}
	}
?>
