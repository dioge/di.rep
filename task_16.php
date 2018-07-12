<pre>

<?php
	$n = rand(2, 10000);
	echo ("The range is from 2 to ".$n.". Perfect numbers are: <br>");
	
	for($i = 2; $i < $n; $i++){
		for($j = 1; $j <= ($i/2); $j++){
			if($i%$j == 0){
				$divisors[] = $j;
			}
		}
		$count = count($divisors);
		
		$sum = 0;
		
		for($j = 0; $j < $count; $j++){
			$sum += $divisors[$j];
		}
		if($sum == $i){
			$perfect_numbers[] = $i;
		}
		unset($divisors);
	}
	
	var_dump ($perfect_numbers);
?>
