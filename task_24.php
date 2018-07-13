<pre>

<?php

	$n = $m = mt_rand();
	
	// Двоичная система
	
	echo ("Decimal number is ".$n."<br>");
	
	while($n > 0){
		
		$n_bin = ($n%2).$n_bin;

		$n = floor($n/2);
	}
	
	echo ("Binary number is ".$n_bin."<br>");
	
	// Шестнадцатеричная система

	$hex_array = array(10 => 'a', 11 => 'b', 12 => 'c', 13 => 'd', 14 => 'e', 15 => 'f');
	
	while($m > 0){
		
		if(($m%16)>9){
			
			$n_hex = $hex_array[($m%16)].$n_hex;
			
		}else{
			
			$n_hex = ($m%16).$n_hex;
		}
		
		$m = floor($m/16);
	}

	$n_hex = "0x".$n_hex;

	echo ("Hexadecimal number is ".$n_hex);
	
?>