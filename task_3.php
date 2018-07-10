<pre><?php

	$n = rand(100, 999);
	
	$n.='';
	
	for($i=0;$i<strlen($n);$i++){
		$n_array[] = (int)$n[$i];
	}
	

	$increase = false;
	
	for($i=0;$i<(count($n_array));$i++){

		if($n_array[$i+1]===NULL){
			
			$increase = true;
			break;
		}elseif($n_array[$i]>$n_array[$i+1] || $n_array[$i]==$n_array[$i+1]){

			break;
		}elseif($n_array[$i]<$n_array[$i+1]){
			
			continue;
		}
	}
	
	
	if($increase){
		
		var_dump($n.": Increasing sequence.");
	}else{

		var_dump($n.": Something else.");
	}
?>