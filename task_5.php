<pre>
<?php

	echo ($n = mt_rand()."<br>");
	
	while($n >= 1){
		
		echo ($n%10);

		$n = (int)($n/10);
	}
	
?>
