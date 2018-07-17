<pre><?php

	$n = $check = rand(10, 1000);
	
	$increase = true;
	
	while($n >= 1){

		if($n%10 <= (int)($n/10)%10){

			$increase = false;

			break;
		}
		
		$n = (int)($n/10);
	}
	
	if($increase){
		
		echo ($check.": Increasing sequence.");
		
	}else{
		
		echo ($check.": Not increasing sequence.");
	}
	
?>
