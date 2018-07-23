<pre><?php

	for($i = 1000; $i < 10000; $i += 2){
		
		$n = $m = $i;
		
		while($n >= 10){
            
			if($n % 10 <= (int)($n / 10) % 10){
                
                $n = 0;
                
				break;
			}
			
			$n = (int)($n / 10);
		}

		while($m >= 10){
            
			if($m % 10 >= (int)($m / 10) % 10){
                
                $m = 0;
                
				break;
			}
			
			$m = (int)($m / 10);
		}
        
        if($n){
        
            echo ("Возрастание = > ".$i."<br>");
            
        }elseif($m){
            
            echo ("Убывание < = ".$i."<br>");
        }
    }

?>
