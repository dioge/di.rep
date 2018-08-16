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
			
			$combinations = array();
			
            $finalCombinations = array();
            
                
            for($i = 0; $i < strlen($this->number); $i++){
            
                $combinations[] = $this->number[$i];
            }

            while($j < $this->limit){
                
                $j++;

                foreach($combinations as $combination){

                    for($i = 0; $i < strlen($this->number); $i++){
                        
                        if($combination == $this->number[$i]){
                            
                            continue;
                        }
                    
                        $newCombinations[] = $combination.$this->number[$i];
                    
                        if(strlen($combination) == $this->limit){
                            
                            $finalCombinations[] = $combination;
                        }
                    }
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
    
    $example->getNumbers("123", 2);
	
	$example->showCombinations();
    
	$example->showErrors();
?>
