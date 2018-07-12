<pre>

<?php

	$n = rand();

	echo ("The number is: ".$n."<br>");
	
	for($i = 2; $i <= ($n/2); $i++){

		if($n%$i == 0){

			$divisors[] = $i;
			continue;
		}
	}

	if($divisors){
		
		var_dump ($divisors);
	}else{

		echo ("The number has no divisors");
	}
?>
