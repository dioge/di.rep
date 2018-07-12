<pre>

<?php

	// $n = (string) rand();
	$m = "11";

	$m_length = strlen($m);
	
	if($m_length%2 !== 0){

		exit("m ".$m." is not even");
	}

	for($i = 0; $i < ($m_length/2); $i++){

		$n .= $m[$i];
	}
	
	$m_halves = $n.$n;
	
	if($m == $m_halves){
		
		echo ("2n is m symmetric: ".$n." and ".$m);
	}
	
?>
