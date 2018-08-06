<pre>

<?php

	class GetCombinations{
		
		public function getCombinations($number = 7320, $limit = 3, $combination = 0){
		
			if($combination > 1000){
				
				echo ($combination."<br>");
			}
				
			for($i = 0; $i <= $limit; $i++){
				
				$digit = $number % 10;
				
				$this->getCombinations((int)($number / 10), $limit - 1, ($combination * 10) + $digit);
				
				$number = (($digit * pow(10, $limit)) + (int)($number / 10));
			}
		}
	}
	
	$test = new getCombinations();
	
	$test->getCombinations();

?>
