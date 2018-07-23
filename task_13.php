<form action="task_13.php" method="get">

	<p>Введите число с четным количеством цифр.</p>
	<input type="text" name="n">
	
</form>

<?php

	$n = $control = $_GET["n"];

	$count = 0;

	for($i = $n; $i >= 1; $i /= 10){
		
		$count++;
	}

	if($count % 2 != 0){

		exit("Число ".$control." содержит нечетное количество цифр");
	}

	$reverse = 0;
		
	while($n >= 1){
		
		$reverse = (($reverse*10) + $n%10);
		
		$n = floor($n/10);
	}
	
	if($control != 0 && $control == $reverse){
	
		echo ("Число ".$control." является симметричным");
	}

?>
