<pre><?php

	$n = mt_rand(1, 36);
	
	echo ("The number is ".$n."<br>");
	
	echo ("Four digit numbers sum of wich equals ".$n."<br>");
	
	for($i = 1000; $i <= 9999; $i++){
		
		$i.="";
		
		if($n == ($i[0] + $i[1] + $i[2] + $i[3])){
		
			echo ($i."<br>");
		
		}
	}
	
?>
