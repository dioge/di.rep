<pre>

<?php

	$n = (string) rand();
	// $n = "51428";
	
	$n_length = strlen($n);
	
	echo ("The number is ".$n."<br>");
	
	for($i = 0; $i < $n_length; $i++){
		
		$n_array[] = $n[$i];
	}

	for($i = 0; $i < ($n_length - 1);){
		
		$check = false;

		if($n_array[$i] > $n_array[($i + 1)]){
			
			$check = true;
		
			$temp = $n_array[$i];
			
			$n_array[$i] = $n_array[($i + 1)];
			
			$n_array[($i + 1)] = $temp;
		}
		
		if($check){
			
			$i = 0;
			
		}else{
			
			 $i++;
		}
	}	
	
	var_dump ($n_array);
?>