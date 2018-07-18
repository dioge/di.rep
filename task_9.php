<form action="task_9.php" method="get">

	<p>Введите натуральное число.</p>
	<input type="text" name="n">
	
</form>

<?php

	$n = $initial = $_GET["n"];

	$square = $initial_square = $n*$n;

	$check = true;

	while($n >= 1){
		
		if($n%10 != $square%10){

			$check = false;
			
			echo ($initial." is not an automorphic number. Square number is ".$initial_square);

			break;
		}
		
		$n = (int)($n/10);
		
		$square = (int)($square/10);
	}

	if($check && $_GET["n"] != null){
	
		echo ($initial." is an automorphic number. Square number is ".$initial_square);
	}

?>
