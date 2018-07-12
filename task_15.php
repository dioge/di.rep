<pre>

<?php

	$n = rand();

	echo ("The number is: ".$n."<br>");
	
	for($i = 1; $i <= ($n/2); $i++){

		if($n%$i == 0){

			$divisors[] = $i;
			continue;
		}
	}

	$divisors[] = $n;
	
	var_dump ($divisors);
?>
