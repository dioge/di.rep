<pre>

<?php

	class GetCombinations{
		
		public $combinations = array();
		
		public function getCombinations($number = "7320", $limit = 3, $combination = "", $i_ = 0){
		

			for($i = $i_; $i < strlen($number); $i++){
				
				if(strlen($combination) == 3){
					
					// $this->combinations[] = $combination;
					
					// echo $combination."<br>";
					
					
					break;
				}
				
				$digit = $number[$i];
				
				$this->getCombinations($number, $limit, $combination .= $digit, $i_ += 1);
									echo $combination."<br>";

								// var_dump($digit);
								// var_dump($i);

			}
		}
	}
	
	$test = new getCombinations();
	
	$test->getCombinations();
	
	// var_dump ($test->combinations);

?>
