<pre>

<?php

	$n = rand();
	
	$m = $lcm = rand();
	
	echo ("The numbers are ".$n." and ".$m.":<br>");
	
	for($i = 0;; $i++){

		if(($lcm%$n) == 0){
			
			echo ($lcm." is a least common multiple of ".$n." and ".$m."<br>");
			
			break;
		}
		
		$lcm += $m;
	}
	
?>