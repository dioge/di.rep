<pre>

<?php

	echo ($n = mt_rand()."<br>");
	
	for($i = $n; $i >= 1; $i = (int)($i/10)){

		$i_digit = $i%10;
	
		for($j = (int)($i/10); $j >= 1; $j = (int)($j/10)){
			
			$j_digit = $j%10;

			if($i_digit == $j_digit){
				
				echo ("The number has following doubling digits: ".$i_digit."<br>");
				
				break 2;
			}
		}
		
	}

?>

