<form action="task_13.php" method="get">

	<p>Введите число с четным количеством цифр.</p>
	<input type="text" name="n">
	
</form>

<?php

	$n = $control = $_GET["n"];

	for($i = $n; $i >= 1; $i /= 10){
		
		$count++;
	}

	if($count%2 != 0){

		exit("Число ".$control." содержит нечетное количество цифр");
	}

	$half_count = 1;

	for($i = $count; $i > ($count/2); $i--){

		$half_count *= 10;
	}
	
	$half = $half_control = floor($n/$half_count);
	
	while($half >= 1){
		
		if($half%10 != $n%10){
			
			echo ("Число ".$half_control." не является ".$control." симметричным");
		
			$n = false;
			
			break;
		}
		
		$half = floor($half/10); 
		
		$n = floor($n/10); 
	}
	
	if($n){
		
		echo ("Число 2x".$half_control." является ".$control." симметричным");
	}
	
?>
