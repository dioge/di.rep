<pre><?php

	$n = rand(1, 36);
	
	echo ("The number is ".$n."<br>");
	
	echo ("Four digit numbers sum of wich equals ".$n."<br>");
	
	for($i = 1000; $i < 10000; $i++){
		
		if($n == ($i%10 + ((int)(($i/10)%10)) + ((int)(($i/100)%10)) + ((int)(($i/1000)%10)))){
		
			echo ($i."<br>");
		
		}
	}
	
?>
