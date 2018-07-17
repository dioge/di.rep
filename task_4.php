<pre><?php

	echo ("Increasing sequence:<br>");

	for($i = 1000; $i < 10000; $i++){
		
        if($i%2 == 0){
            
			$n = $i;
			
			while($n >= 10){

				if($n%10 <= (int)($n/10)%10){

					continue 2;
				}
				
				$n = (int)($n/10);
			}
		
			echo ($i."<br>");
		}
    }
	
	
	echo ("Decreasing sequence:<br>");

	for($i = 1000; $i < 10000; $i++){
		
        if($i%2 == 0){
            
			$n = $i;
			
			while($n >= 10){
				
				if($n%10 >= ((int)($n/10)%10)){

					continue 2;
				}
				
				$n = (int)($n/10);
			}
		
			echo ($i."<br>");
		}
    }
	
?>
