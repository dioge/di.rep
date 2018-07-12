<pre>

<?php
	$n = rand(1, 11000);
	
	echo ("The range is from 1 to ".$n.". Amicable numbers are:<br>");
	
    // Находим все суммы делителей чисел
    
	for($i = 1; $i <= $n; $i++){
        
		for($j = 1; $j < (($i/2) + 1); $j++){
            
			if($i%$j == 0){
                
				$divisors[] = $j;
			}
		}

   		$count = count($divisors);

        $sum = 0;
		
		for($j = 0; $j < $count; $j++){
            
			$sum += $divisors[$j];
		}
        
        $divisors_sums[$i] = $sum;

		unset($divisors);
	}
    
    // Проверяем на дружественность
	
	for($i = 1; $i <= $n; $i++){
    
        for($j = 1; $j <= $n; $j++){
            
            if($i != $j && $i == $divisors_sums[$j] && $j == $divisors_sums[$i]){
                
                if($check == $j){
                    
                    break;
                }
                
                echo ($i." and ".$j."<br>");

                $check = $i;
                
            }
        }
    }
    
?>
