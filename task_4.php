<pre><?php

	for($i = 1000; $i < 10000; $i += 2){
		
		$n = $i;
		
        if($n % 10 > (int)($n / 10) % 10){
            
            while($n >= 10){
                
                if($n % 10 <= (int)($n / 10) % 10){
                    
                    continue 2;
                }
                
                $n = (int)($n / 10);
            }
            
            echo ("Возрастание = > ".$i."<br>");

        }elseif($n % 10 < (int)($n / 10) % 10){

            while($n >= 10){
                
                if($n % 10 >= (int)($n / 10) % 10){
                    
                    continue 2;
                }
                
                $n = (int)($n / 10);
            }
            
            echo ("Убывание < = ".$i."<br>");
        }
    }

?>
