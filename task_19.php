<pre>

<?php

	$n = rand();
	
	$m = rand();
	
	if($n < $m){
		
		$lcm = $dividend = $m;
		
		$divisor = $n;
		
	}else{
		
		$lcm = $dividend = $n;
		
		$divisor = $m;
	}
	
	while(($lcm%$divisor) != 0){

		$lcm += $dividend;
	}
	
	echo ("Число ".$lcm." является НОК ".$n." и ".$m."<br>");
	
?>
