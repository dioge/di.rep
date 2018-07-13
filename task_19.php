<pre>

<?php

	$n = rand();
	
	$m = rand();
	
	echo ("The numbers are ".$n." and ".$m.":<br>");
	
	// Оптимизация для более емкого подсчета
	
	if($n < $m){
		
		$lcm = $dividend = $m;
		$divisor = $n;
	}else{
		
		$lcm = $dividend = $n;
		$divisor = $m;
	}
	
	// Подсчет
	
	for($i = 0;; $i++){

		if(($lcm%$divisor) == 0){
			
			echo ($lcm." is a least common multiple of ".$n." and ".$m."<br>");
			
			break;
		}
		
		$lcm += $dividend;
	}
	
?>
