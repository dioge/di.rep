
<?php
	$n = rand(2, 10000);
	
	echo ("Диапазон от 1 до ".$n.". Дружественные числа:<br>");
	
	for($i = 2; $i <= $n; $i++){
        
        $i_sum = 0;

		for($j = 1; $j <= ($i/2); $j++){
            
			if($i%$j == 0){
                
				$i_sum += $j;
			}
		}
		
		for($k = ($i + 1); $k <= $n; $k++){

			if($i_sum == $k){
				
				$k_sum = 0;

				for($p = 1; $p <= ($k/2); $p++){
					
					if($k%$p == 0){
						
						$k_sum += $p;
					}
				}
			
				if($i == $k_sum){
					
					echo ($i." и ".$k."<br>");
				}
			}
		}
	}
    
?>
