<pre>

<?php

	class GetCombinations{
		
		public $combinations = array();
		
		
		public function getCombination($number = "1234", $limit = 3, $combination = "", $usedDigits = array()){
		
			
			for($i = 0; $i < strlen($number); $i++){
			$usedDigits_ = $usedDigits;
				
				for($j = 0; $j < count($usedDigits); $j++){
									
				
					if($i == $usedDigits[$j]){
				// var_dump ($usedDigits_);
		
						continue 2;
					}
				}

				$combination_ = $combination;
				
				$usedDigits[] = $i;
				
				
				$digit = $number[$i];
				
				if(strlen($combination_) == $limit){
					
					// $this->combinations[] = $combination;
					
					echo $combination_."<br>";
					
					break;
				}
				
				$this->getCombination($number, $limit, $combination_ .= $digit, $usedDigits_);

				
				
			}
		}
	}
	
	$test = new GetCombinations();
	
	$test->getCombination();
	
	// var_dump ($test->combinations);
	// var_dump ($test);

?>
