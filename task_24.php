<pre>

<?php

	$n = mt_rand();
	
	echo ("Число в десятичной системе: <br>".$n);
	
	
	echo ("<br>Число в двоичной системе: <br>");

	function get_binary_n($number){
		
		$number = floor($number / 2);
	
		while($number > 0){
			
			get_binary_n($number);
			
			echo($number % 2);

			break;
		}
	}
	
	get_binary_n($n);

	echo($n % 2);
	
	
	
	echo ("<br>Число в шестнадцатеричной системе: <br>0x");

	function get_hexadecimal_n($number){
		
		$number = floor($number/16);
		
		while($number > 0){
			
			get_hexadecimal_n($number);
				
			if(($number%16)>9){
				
				switch($number%16){
					
					case 10:
					
						echo ("a");
						break;
						
					case 11:
					
						echo ("b");
						break;
						
					case 12:
					
						echo ("c");
						break;		
						
					case 13:
					
						echo ("d");
						break;
						
					case 14:
					
						echo ("e");
						break;
						
					case 15:
					
						echo ("f");
						break;
				}

			}else{
				
				echo ($number%16);
			}
			
			break;
		}
	}
	
	get_hexadecimal_n($n);
	
	if(($n%16)>9){
				
		switch($n%16){
			
			case 10:
			
				echo ("a");
				break;
				
			case 11:
			
				echo ("b");
				break;
				
			case 12:
			
				echo ("c");
				break;		
				
			case 13:
			
				echo ("d");
				break;
				
			case 14:
			
				echo ("e");
				break;
				
			case 15:
			
				echo ("f");
				break;
		}

	}else{
		
		echo ($n%16);
	}

?>
