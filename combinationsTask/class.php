<pre>

<?php
	class Combinations{
        
        private $number;
        
        private $limit;
		
		private $combinations = array();
        
        private $errors = array();
        
        public function getNumbers($number, $limit){
            
            $this->number = $number;
            
            $this->limit = $limit;
        }
		
        private function countCombinations(){
            
            $combinationsNumber = gmp_fact(strlen($this->number))/gmp_fact(strlen($this->number) - $this->limit);
			
            return "Количество комбинаций: ".$combinationsNumber;
        }
        
        
        
        
        
        
        
        
        
        
        
        
		private function getCombinations(){
			
            $finalCombinations = array();
            
            $usedDigits = array();
            
            $combinations = str_split($this->number);

            for($i = 0; $i < $this->limit; $i++){
                
                foreach($combinations as $combination){
                    
                    $usedDigits[] = $combination;
                    
                    // var_dump ($combination);
                    // var_dump ("----------------------<br>");
                    
                    if(strlen($combination) == $this->limit){
                        
                        $finalCombinations[] = $combination;
                    }
                        
                    for($j = 0; $j < strlen($this->number) && strlen($combination) <= $this->limit; $j++){
                        
                        foreach($usedDigits as $usedDigit){

                            if($this->number[$j] == $usedDigit){
                
                                continue 2;
                            }
                        }
                    
                        $newCombinations[] = $combination.$this->number[$j];
                    }
                    
                    unset($usedDigits);
                }
                
                $combinations = $newCombinations;
            }
            
            return $finalCombinations;
		}
		
        
        
        
        
        
        
        
        
        
        public function showCombinations(){
            
            var_dump ($this->getCombinations());
            
            $this->getErrors();
        }
        
        private function getErrors(){
            
            try{
                
                if((strlen($this->number) - $this->limit) < 0){
                    
                    throw new Exception("Длина строки больше, чем у заданного числа");
                }
                echo ($this->countCombinations())."<br>";
                
            }catch(Exception $e){
                
                $this->recordError($e->getMessage());
            }
            
            try{
                
                if(!$this->combinations){
                    
                    throw new Exception("Массив пустой");
                }
                
                var_dump($this->combinations);
                
                // foreach($this->combinations as $combination){
                    // echo $combination."<br>";
                // }
                
            }catch(Exception $e){
                $this->recordError($e->getMessage());
            }
        }
        private function recordError($error){
            
            $this->errors[] = $error;
        }
        public function showErrors(){
            
            foreach($this->errors as $error){
                echo "Ошибка: " . $error."<br>";
            }
        }
	}
	
	$example = new Combinations();
    
    $example->getNumbers("123", 3);
	
	$example->showCombinations();
    
	$example->showErrors();
?>
