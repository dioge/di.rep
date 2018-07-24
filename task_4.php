<pre><?php

	for($i = 1000; $i < 10000; $i += 2){
		
		$n = $m = $k = $i;
		
		$increase = $decrease = false;
		
		while($n >= 10){
			
			if($m % 10 > (int)($m / 10) % 10){
				
				$increase = true;
				
				$m = $n =(int)($n / 10);
				
			}elseif($k % 10 < (int)($k / 10) % 10){
				
				$decrease = true;
				
				$k = $n = (int)($n / 10);
				
			}else{
				
				$increase = $decrease = false;

				break;
			}
		}
		
		if($increase){

			echo ("Возрастание = > ".$i."<br>");

		}elseif($decrease){
		
			echo ("Убывание < = ".$i."<br>");
		}
    }
?>
