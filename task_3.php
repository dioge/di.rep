<pre><?php

	$n .= rand(1, 1000);
	
	$increase = true;
	
	$n_length = (strlen($n) - 1);

	for($i=0; $i < $n_length; $i++){

		if($n[$i] >= $n[$i + 1]){

			$increase = false;

			break;
			
		}
	}
	
	if($increase && ($n_length > 0)){
		
		echo ($n.": Increasing sequence.");
		
	}else{
		
		echo ($n.": Not increasing sequence.");
	}
	
?>
