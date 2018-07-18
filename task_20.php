<pre>

<?php

	$n = rand(1, 1000);
	
	echo ("Диапазон от 1 до ".$n.":<br>");
	
	for($i = 1; $i <= $n; $i++){
		
		$sum = 0;

		for($j = 1; $j <= ($i/2); $j++){

			if($i%$j == 0){

				$sum += $j;
			}
		}

		if($biggest_sum < $sum){
			
			$biggest_sum = $sum;
			
			$number = $i;
		}
	}

	echo ($biggest_sum." является наибольшей суммой делителей числа ".$number." в диапазоне");

?>
