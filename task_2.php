<pre><?php

	$n = rand(1, 36);
	
	echo ("Число: ".$n."<br>");
	
	echo ("Четырехзначные числа, сумма цифр которых равна ".$n."<br>");
	
	for($i = 1000; $i < 10000; $i++){
		
		if($n == ($i%10 + ((int)(($i/10)%10)) + ((int)(($i/100)%10)) + ((int)(($i/1000)%10)))){
		
			echo ($i."<br>");
		
		}
	}
	
?>
