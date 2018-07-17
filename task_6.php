<pre>

<?php

	for($i = 1000; $i < 10000; $i++){
		
		$n = $i;
		
		while($n >= 1){
			
			$digit = $n%10;
			
			if($digit == 1 || $digit == 4 || $digit == 5 || $digit == 6 || $digit == 8 || $digit == 9){

				continue 2;
			}
			
			$n = (int)($n/10);
		}
	
		echo ($i."<br>");
    }
	
?>
