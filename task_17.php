<pre>

<?php

	$n = rand();

	$m = rand();

	echo ("Числа: ".$n." и ".$m."<br>");
	
	if($n < $m){

		$temp = $n;
		
	}else{
		
		$temp = $m;
	}
	
	for($i = $temp; $i >= 1; $i--){

		if($n%$i == 0 && $m%$i == 0){

			echo ("Наибольший общий делитель ".$i."<br>");
			
			break;
		}
		
		if($i == $temp){
			
			$i = ((int)($i/2) + 1);
		}
	}
	
?>
