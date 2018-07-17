<pre><?php

	$n = rand();
	
	$count = 0;
	
	echo ("Число: ".$n."<br>");
	
	while($n >= 1){
		
		if($n%10 < 5){
			
			$count++;
		}

		$n = floor($n/10);
	}
	
	echo ("Количество цифр, меньших 5, в числе: ".$count)."<br>";
	
?>
