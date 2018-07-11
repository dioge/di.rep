<pre>

<?php

	// Сохраняем в массив $i_array массивы чисел, разбитых на цифры
	
	for($i = 1000; $i <= 9999; $i++){
		
		$i .= '';
		$length = strlen($i);
		
		for($j = 0; $j < $length; $j++){
			
			$j_array[$j] = $i[$j];
		}
		
		$i_array[] = $j_array;
	}

	// Проверка
	
	$i_count = count($i_array);

	for($i = 0; $i < $i_count; $i++){
		
		for($j = 0; $j <= $length; $j++){
            
			$digit = (int)$i_array[$i][$j];
			
			if($digit === 0 || $digit === 2 || $digit === 3 || $digit === 7){
			
				if($j == (count($i_array[$i]) - 1)){
				
					$numbers[] = $i_array[$i];
				}
            }else{
				
                break;
            }
        }
    }    

	//Объединяем цифры в числа для удобного вывода
	$number_count = count($numbers);

	for($i = 0; $i < $number_count; $i++){
		
		$j_number = '';
		
		for($j = 0; $j < $length; $j++){
			
			$j_number .= $numbers[$i][$j];
		}
		
		$joint_numbers[] = $j_number;
	}
	
	var_dump($joint_numbers);
?>
