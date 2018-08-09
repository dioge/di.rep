<pre>

<?php

    class MyException extends Exception{
        
        private $exceptions = array();
        
        private function setException(){
            
            
        }
        
        private function getException(){
            
            
        }
        
        private function showException(){
            
            
        }
    }


	class Combinations{
        
        private $number;
        
        private $limit;
		
		private $combinations = array();
        
        private function setException(){
            
            if((strlen($this->number) - $this->limit) < 0){
                    
                throw new Exception("Длина строки больше, чем у заданного числа");
            }
        }

        
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

        private function countCombinations(){
            
            $this->setException();
            
            $combinationsNumber = gmp_fact(strlen($this->number))/gmp_fact(strlen($this->number) - $this->limit);
            
            return "Количество комбинаций: ".$combinationsNumber;
        }
        
        public function showCombinations(){
            
            try{
                
                echo ($this->countCombinations())."<br>";
                
            }catch(Exception $e){
                
                echo "Ошибка: ", $e->getMessage(), "<br>";
            }
            
            $this->getCombinations();
            
            var_dump ($this->combinations);
        }
	}
	
	$example = new Combinations();
    
    $example->getNumbers("12345", 6);
	
	$example->showCombinations();
	    
?>
