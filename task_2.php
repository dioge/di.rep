<pre><?php

	$n = mt_rand(1, 36);
	
	var_dump($n);
	
	$numbers = [];
	
	for($i=1000; $i<9999; $i++){
		
		$i.="";
		
		if($n==($i[0]+$i[1]+$i[2]+$i[3])){
		
			$numbers[]=$i;
		
		}
	}
	
	var_dump($numbers);

?>