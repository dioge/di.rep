<pre>

<?php

	$n = rand();

	echo ("Число: ".$n."<br>");
	
	for($i = 0; $i <= $n; $i++){

	$reverse = $square_reverse = 0;
		
		for($j = $i; $j >= 1; $j = floor($j/10)){
			
			$reverse = (($reverse*10) + $j%10);
		}
		
		if($i == $reverse){
			
			$square = ($i * $i);
		
			for($k = $square; $k >= 1; $k = floor($k/10)){
			
				$square_reverse = (($square_reverse*10) + $k%10);
			}

			if($square == $square_reverse){

				echo ("Квадрат числа-палиндрома ".$i." также является палиндромом ".$square."<br>");
			}
		}
	}

?>
