<pre>

<?php

	$n = rand(2, 10);
	
	echo ("The range is from 2 to ".$n.". Amicable numbers are:<br>");
	
	for($i = 2; $i < $n; $i++){
		for($j = 1; $j <= ($i/2); $j++){
			if($i%$j == 0){
				$divisors[] = $j;
			}
		}

		$numbers_divisors[] = $divisors;
			var_dump ($i);
			var_dump ($divisors);
		
		unset($divisors);
	}
	
	var_dump ($numbers_divisors);
?>