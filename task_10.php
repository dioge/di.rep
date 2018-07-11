<pre>

<?php

	
	$n = (string) rand();

	echo ("The number is: ".$n."<br>");


	// Получаем числа-палиндромы меньшие N

	for($i = 0; $i < $n; $i++){
		
		$i .= '';
		$length = strlen($i);
		
		for($j = 0; $j < $length; $j++){
			
			$i_array[$j] = $i[$j];
		}

		for($j = 0; $j < $length; $j++){

			$reverse_i_array[$j] = $i_array[($length - 1) - $j];
		}
		
		$reverse_i = '';
		
		for($j = 0; $j < $length; $j++){
			
			$reverse_i .= $reverse_i_array[$j];
		}
		
		if($i == $reverse_i){
			
			$n_array[] = $i;
		}
	}
		$count = count($n_array);

	// Квадратные числа-палиндромы
	
	for($i = 0; $i < $count; $i++){
		
		$number = (string) ($n_array[$i]*$n_array[$i]);
		$length = strlen($number);

		for($j = 0; $j < $length; $j++){
			
			$number_array[$j] = $number[$j];
		}

		for($j = 0; $j < $length; $j++){

			$reverse_number_array[$j] = $number_array[($length - 1) - $j];
		}
		
		$reverse_number = '';
		
		for($j = 0; $j < $length; $j++){
			
			$reverse_number .= $reverse_number_array[$j];
		}

		if($number == $reverse_number){

			$square_number_array[] = $number;
		}
	}

	// Результат
	
	for($i = 0; $i < count($square_number_array); $i++){

		$final_number_array[$i] = (int)(sqrt($square_number_array[$i]));
	}
	
	var_dump($final_number_array);
?>
