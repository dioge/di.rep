<pre><?php

	$n = mt_rand();
	
	$n_array = str_split($n);
	
	var_dump($n_array);
	
	$numbers;
	
	for($i=0; $i<(count($n_array)); $i++){
		
		if($n_array[$i]<5){
		
			$numbers++;
		
		}
	}
	
	echo ($numbers);

?>