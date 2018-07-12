<pre>

<?php

	
	$n = (string) rand();

	echo ("The number is: ".$n."<br>");

	for($i = 1; $i < $n; $i++){
		
		$i .= '';
		$length = strlen($i);

		for($j = 0; $j < $length; $j++){
			
			$i_array[$j] = $i[$j];
		}

		$n_array[$i] = $i_array;
		
		
		$sum = 0;

		for($j = 0; $j < $length; $j++){
			
			$sum += $n_array[$i][$j];
		}
		
		if(($i%$sum) == 0){
			
			$final_array[] = $i;
		}
	}

	var_dump($final_array);
?>
