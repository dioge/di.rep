<pre>

<?php

	echo ($n = mt_rand()."<br>");
	
	for($i = $n; $i >= 1; $i = (int)($i/10)){

		for($j = (int)($i/10); $j >= 1; $j = (int)($j/10)){
			
			if($i%10 == $j%10){
				
				echo ("Число имеет повторяющиеся цифры: ".($i%10)."<br>");
				
				break 2;
			}
		}
		
	}

?>

