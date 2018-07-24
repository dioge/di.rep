<pre>
<?php

	echo ($n = mt_rand()."<br>");
	
	while($n >= 1){
		
		$reverse = (($reverse * 10) + ($n % 10));
		
		$n = floor($n / 10);
	}

	echo ($reverse);
	
?>
