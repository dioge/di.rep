<pre>

<?php

	// Сохраняем в массив $i_array числа, разбитые на цифры
	
	for($i = 1000; $i <= 9999; $i++){
		
		$i .= '';
		$length = strlen($i);
		
		for($j = 0; $j < $length; $j++){
			
			$j_array[$j] = $i[$j];
		}
		
		$i_array[] = $j_array;
	}
	
	// Проверка на повторение цифр
	
	$count = count($i_array);
	
	for($i = 0; $i < $count; $i++){
		
		$number_array = $i_array[$i];
		
		for($j = 0; $j < $length; $j++){

			if($j == ($length - 1)){
			
				$numbers[] = $number_array;
			}
			
			for($k = ($j + 1); $k < $length; $k++){

				if($number_array[$j] == $number_array[$k]){
					
					break 2;
				}
			}
		}
	}
	
	var_dump ($numbers);
?>
