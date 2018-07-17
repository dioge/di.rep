<pre><?php

	$n = (string) mt_rand();
	
	echo ("The number is ".$n."<br>");
	
	$n_length = strlen($n);
	
	for($i = 0; $i < $n_length; $i++){
		
		if($n[$i] < 5){

			$digits++;
			
			echo ($n[$i]."<br>");
		
		}
	}
	
	echo ("The number of digits less than 5 used in the number is ".$digits);

?>
