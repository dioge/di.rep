<pre>

<?php

	$n = (string) mt_rand();

	var_dump($n);
	
	$length = strlen($n);
	
	for($i = 0; $i < $length; $i++){

		$n_array[] = $n[$i];
	}

	for($i = 0; $i < $length; $i++){

		$reverse_array[] = $n_array[($length - 1) - $i];
	}
	
	for($i = 0; $i < $length; $i++){
		
		$reverse_n .= $reverse_array[$i];
	}
	
	var_dump($reverse_n);
?>
