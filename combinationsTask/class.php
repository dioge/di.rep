<pre>

<?php

	class Combinations{
        
        private $number;
        
        private $limit;
		
		private $combinations = array();
        
        public function getNumbers($number, $limit){
            
            $this->number = $number;
            
            $this->limit = $limit;
        }
		
		private function getCombinations($combination = "", $usedDigits = array()){
		
			for($i = 0; $i < strlen($this->number); $i++){
			
                foreach($usedDigits as $usedDigit){
                    
					if($i == $usedDigit){
		
						continue 2;
					}
                }
                
				$combination_ = $combination;
                
                $usedDigits_ = $usedDigits;
				
				$usedDigits_[] = $i;
				
				$digit = $this->number[$i];
				
				if(strlen($combination_) == $this->limit){
					
					$this->combinations[] = $combination_;
					
					break;
				}
				
				$this->getCombinations($combination_ .= $digit, $usedDigits_);
			}
		}
        
        public function showCombinations(){
            
            $this->getCombinations();
            
            var_dump ($this->combinations);
        }
	}
	
	$test = new Combinations();
    
    $test->getNumbers("12345", 3);
	
	$test->showCombinations();
    
?>
