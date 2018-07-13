<pre>

<?php
	
    $n = rand(1, 10000);
	
	echo ("The range is from 1 to ".$n.":<br>");
	
	// Находим все суммы простых делителей
	
	for($i = 1; $i <= $n; $i++){
		
		for($j = 1; $j <= ($i/2); $j++){
            
			if($i%$j == 0){
                
                for($k = 2; $k <= ($j/2); $k++){

                    if($j%$k == 0){
                        
                        continue 2;
                    }
                }
                
				$divisors[] = $j;
			}
		}

		$divisors[] = $i;
        
		$count = count($divisors);
		
		$sum = 0;
		
		for($j = 0; $j < $count; $j++){
            
			$sum += $divisors[$j];
		}
		
		$i_sums[$i] = $sum;
		
		unset($divisors);
	}
    
	// Высчитываем максимальню сумму простых делителей

	$max_sum = $number = 1;
	
	for($i = 1; $i <= $n; $i++){
        
		if($i_sums[$i] > $max_sum){
			
			$max_sum = $i_sums[$i];
			
			$number = $i;
		}
	}
	
	echo ($max_sum." is the max sum of ".$number." prime number in the range");
?>