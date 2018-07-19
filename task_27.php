<pre>

<?php
	
    $n = rand(1, 10000); 
	
	echo ("Диапазон от 1 до ".$n.":<br>");
	
	for($i = 1; $i <= $n; $i++){
		
		$sum = 0;
		
		for($j = 2; $j <= ($i / 2); $j++){
            
			if($i % $j == 0){
                
                for($k = 2; $k <= ($j / 2); $k++){
					
                    if($j % $k == 0){
                        
                        continue 2;
                    }
                }

				$sum += $j;
			}
		}

		if($sum > $max_sum){
			
			$max_sum = $sum;
			
			$number = $i;
		}
	}

	echo ($max_sum." является максимальной суммой простых делителей числа ".$number." в диапазоне");
?>
