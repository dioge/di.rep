<pre>

<?php

	$n = rand();
	
	$count = 0;

	echo ("Делители числа ".$n."<br>");
	
	for($i = 1; $i <= ($n / 2); $i++){

		if($n % $i == 0){

			echo ($i."<br>");
			
			$count++;
		}
	}

	echo ($n."<br>Количество делителей: ");

	echo ($count + 1);

?>
