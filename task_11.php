<?php

	$n = rand();

	echo ("Число: ".$n."<br>");

	for($i = 10; $i <= $n; $i++){
		
		$sum = 0;
		
		for($j = $i; $j >= 1; $j = floor($j/10)){
			
			$sum +=  $j%10;
		}
		
		if(($i%$sum) == 0){
			
			echo ($i." делится на сумму ".$sum." своих чисел<br>");
		}
	}

?>
