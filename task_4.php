<pre><?php

	echo ("Порядок возрастания:<br>");

	for($i = 1000; $i < 10000; $i += 2){
		
		$n = $i;
		
		while($n >= 10){

			if($n%10 <= (int)($n/10)%10){

				continue 2;
			}
			
			$n = (int)($n/10);
		}
	
		echo ($i."<br>");
    }
	
	
	echo ("Порядок убывания:<br>");

	for($i = 1000; $i < 10000; $i += 2){
		
		$n = $i;
		
		while($n >= 10){
			
			if($n%10 >= ((int)($n/10)%10)){

				continue 2;
			}
			
			$n = (int)($n/10);
		}
	
		echo ($i."<br>");
    }
	
?>
