<form action="task_29.php" method="get">

	<p>Введите натуральное число.</p>
	<input type="text" name="n">
    
	<p>Задайте число для сравнения.</p>
	<input type="text" name="k">

	<input type="submit" value="Подтвердить">
	
</form>

<pre>

<?php
	
    $n = rand(1, $_GET["n"]);
    
    $k = $_GET["k"];
    
	echo ("Диапазон от 1 до ".$n."<br>");
    
	echo ("Число k: ".$_GET["k"]."<br>");
	
	function exponentiation($base, $exponent){
		
		for($i = $number = 1; $i <= $exponent; $i++){
			
			$number *= $base;
		}
		
		return $number;
	}
	
	function get_combinations($number, $limit = 0, $digits_number_, $digits_sum = 0, $digits = "", $k_){
     
		if($limit == $digits_number_ || $number == 0){
			
			return;
		}
        
		for($i = 0; $i <= $limit; $i++){
		
			$order = exponentiation(10, $i);
			
            $digit = ((int)($number / $order)) % 10;
            
			if($digit == 0){
                
                break;
            }

			$digits_sum_ = $digits_sum;
	
			$digits_sum_ += $digit;

            $digits_ = $digits;
			
			$digits_ = $digit." ".$digits_;
            
            if($digits_sum_ == $k_){
                
                echo $digits_;

                echo "= ".$digits_sum_.", ";
            }
            
			get_combinations((int)($number / exponentiation(10, $i + 1)), $limit + 1, $digits_number_, $digits_sum_, $digits_, $k_);
			
		}
		
		if((int)($number / 10) > 0 && $digits_sum == 0){
			
			get_combinations((int)($number / 10), 0, $digits_number_, 0, "", $k_);
		}
	}
    
    for($i = 1; $i <= $n; $i++){
        
        echo ("<br>Число ".$i." => ");

        $count = $i;
        
        $digits_number = 0;

        while($count > 10){
            
            $count = (int)($count / 10);
            
            $digits_number++;
        }

        get_combinations($i, 0, $digits_number, 0, "", $k);
    }
?>
