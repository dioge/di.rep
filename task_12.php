<pre>

<?php

	$n = (string) rand();

	$check = true;
	echo ("The number is: ".$n."<br>");

	for($i = 2; $i <= ($n/2); $i++){
		
		if($n%$i == 0){

			$check = false;
			break;
		}
	}

	if($check){
	
		echo ("N ".$n." is a prime number");
	}
?>
