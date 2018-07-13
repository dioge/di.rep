<pre>

<?php
	$n = rand(1, 45000);
	
	echo ("The range is from 1 to ".$n.":<br>");
    
    // Находим факторионы
	
	for($i = 1; $i <= $n; $i++){
		
		$i .= "";
		
		$length = strlen($i);
		
		$j_factorial_sum = 0;
		
		for($j = 0; $j < $length; $j++){
            
			$j_factorial = 1;
            
            if($i[$j] == 0){
                
                $j_factorial_sum += $j_factorial;
                
                continue;
            }
			
			for($k = 1; $k <= $i[$j]; $k++){
				
				$j_factorial *= $k;
			}
			
			$j_factorial_sum += $j_factorial;
		}
		
        if($i == $j_factorial_sum){
            
            $factorion_array[] = $j_factorial_sum;
        }
	}
    
    // Находим количество и сумму факторионов
    
    $count = count($factorion_array);
    
    echo ("Number of factorions in the range: ".$count."<br>");
    
	var_dump ($factorion_array);
    
    for($i = 0; $i < $count; $i++){
        
        $sum += $factorion_array[$i];
    }
	
    echo ("Sum of factorions in the range: ".$sum);
    
?>
