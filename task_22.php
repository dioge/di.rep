<pre>

<?php

	$n = $dividend = rand();

	echo ("Число: ".$n." простые множители:<br>");
	
	$factor = 2;

	while($dividend > 1){
		
		if($dividend%$factor == 0){

			echo ($factor."<br>");
			
			$dividend /= $factor;
			
			$factor = 1;
		}
		
		$factor++;
	}
		
	if($n == $dividend){
		
		echo ("Число ".$n." простое <br>");
	}
	
?>
