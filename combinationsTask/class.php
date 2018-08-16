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

                for($j = 0; $j < count($combinations); $j++){
                
                    $usedDigits[] = $this->number[$j];
                    
                    $combination .= $combinations[$j];
                    
                    if(strlen($combination) == $this->limit){
                        
                        $finalCombinations[] = $combination;
                    }
                    
                    for($k = 0; $k < strlen($this->number) && strlen($combination) <= $this->limit; $k++){
                        
                        foreach($usedDigits as $usedDigit){

                            if($this->number[$k] == $usedDigit){
                
                                continue 2;
                            }
                        }
                    
                        $newCombinations[] = $combination.$this->number[$k];
                    // var_dump ($combination);
                    // var_dump ($usedDigit);
                    // var_dump ($newCombinations);
                    // var_dump ("----------------------<br>");
                    }
                    
                    $combination = "";
                    
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
