<pre>

<?php

	$n = (string) rand(1, 100000);

	echo ("The number is ".$n."<br>");
    
    for($i = 1; $i <= $n; $i++){

        $control = $i;
        
        $i .= "";
        
        $i_length = strlen($i);
        
        for($j = 0; $j < ($i_length - 1);){
            
            $check = false;
            
            if($i[$j] < $i[($j + 1)]){
                
                $check = true;
            
                $temp = $i[$j];
                
                $i[$j] = $i[($j + 1)];
                
                $i[($j + 1)] = $temp;
            }
            
            if($check){
                
                $j = 0;
                
            }else{
                
                 $j++;
            }
        }
        
        $i_array[$control] = $i;
        
        $i = $control;
    }
    
	var_dump ($i_array);
?>