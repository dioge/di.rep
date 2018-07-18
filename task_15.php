<pre>

<?php

	$n = rand();

	echo ("Делители числа ".$n."<br>");
	
	for($i = 1; $i <= ($n/2); $i++){

		if($n%$i == 0){

			echo ($i."<br>");
			
			$count++;
		}
	}

	echo ($n."<br>");
	
	echo ($count + 1);

?>
