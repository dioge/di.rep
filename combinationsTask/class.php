<pre>

<?php
	class Combinations{
        
        private $number;
        
        private $limit;
		
		private $combinations = array();
        
        private $errors = array();
        
        // Получение строки и длины
        
        public function getNumbers($number, $limit){
            
            $this->number = $number;
            
            $this->limit = $limit;
        }
		
        // Подсчет комбинаций
        
        private function countCombinations(){
            
            $combinationsNumber = gmp_fact(strlen($this->number))/gmp_fact(strlen($this->number) - $this->limit);
			
            return $combinationsNumber;
        }

        // Получение комбинаций
        
	private function getCombinations(){
			
            $combinations = $originalNumber = str_split($this->number);
            
            for($i = 0; $i < ($this->limit - 1); $i++){
                
                foreach($combinations as $combination){
                    
                    $restDigits = array_diff($originalNumber, str_split($combination));

                    foreach($restDigits as $restDigit){
                        
                        $tempCombination = $combination.$restDigit;

                        $tempCombinations[] = $tempCombination;
                    }
                }
                
                $combinations = $tempCombinations;
                
                unset($tempCombinations);
            }
            
            return $this->combinations = $combinations;
		}
		
        // Вывод комбинаций
        
        public function showCombinations(){
            
            $this->getCombinations();
            
            $this->getErrors();
        }
        
        // Проверка на ошибки
        
        private function getErrors(){
            
            try{
                
                if((strlen($this->number) - $this->limit) < 0){
                    
                    throw new Exception("Длина строки больше, чем у заданного числа");
                }
            echo "Число: {$this->number}, длина строки: {$this->limit}, количество комбинаций: {$this->countCombinations()}<br>"; 
                
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
        
        // Запись ошибки
        
        private function recordError($error){
            
            $this->errors[] = $error;
        }
        
        // Вывод ошибки
        
        public function showErrors(){
            
            foreach($this->errors as $error){
                
                echo "Ошибка: " . $error."<br>";
            }
        }
	}
	
	$example = new Combinations();
    
    $example->getNumbers("1234", 3);
	
	$example->showCombinations();
    
	$example->showErrors();
?>
