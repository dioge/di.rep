<pre>

<?php

	for($i = 1000; $i < 10000; $i++){
		
		for($j = $i; $j >= 1; $j = (int)($j/10)){
			
			for($k = (int)($j/10); $k >= 1; $k = (int)($k/10)){
				
				if($j%10 == $k%10){
					
					continue 3;
				}
			}
		}
		
		echo ($i."<br>");
    }
	
?>
