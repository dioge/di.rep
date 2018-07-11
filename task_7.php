<pre>

<?php

	// Сохраняем в массив цифры, составляющие число

	$n = (string) mt_rand();

	var_dump($n);
	
	$length = strlen($n);
	
	for($i = 0; $i < $length; $i++){

		$n_array[] = $n[$i];
	}
	
	// Проверка на повторение цифр

	for($i = 0; $i < $length; $i++){

		if($i == ($length - 1)){
		
			echo ("The number ".$n." has no doubling digits");
		}
		
			for($j = ($i + 1); $j < $length; $j++){

				if($n_array[$i] == $n_array[$j]){
					
					echo ("The number ".$n." has doubling digits: ".$n_array[$i]);
					break 2;
				}
			}
		
		
	}
?>
