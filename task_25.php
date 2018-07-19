<pre>

<?php
	$n = rand(1, 100000);
	
	$count = 1;
	
	echo ("Диапазон от 1 до ".$n."<br>Числа:<br>");
    
	for($i = 1; $i <= $n; $i++){

		$j_factorial_sum = 0;

		for($j = $i; $j >= 1; $j = (int)($j/10)){
            
			$j_factorial = 1;
            
            if($j % 10 == 0){
                
                $j_factorial_sum += $j_factorial;
                
                continue;
            }
			
			for($k = 1; $k <= $j % 10; $k++){
				
				$j_factorial *= $k;
			}
			
			$j_factorial_sum += $j_factorial;
		}
		
        if($i == $j_factorial_sum){
            
            echo ($count++.". ".$i."<br>");
			
			$sum += $i;
        }
	}
	
    echo ("Сумма факторионов диапазона: ".$sum);
    
?>
