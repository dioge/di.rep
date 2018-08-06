<pre>

<?php

	class GetCombinations{
		
		public function getCombinations($number = "7320", $limit = 3, $combination = "", $i_ = 0){
		
				
			for($i = $i_; $i < strlen($number); $i++){
				
				if($combination == 2){
					
					echo ($combination."<br>");
					
					break;
				}
				
				$digit = $number[$i];
				
				$this->getCombinations($number, $limit, $combination .= $digit, $i_++);
				
				
			}
		}
	}
	
	$test = new getCombinations();
	
	$test->getCombinations();

?>
