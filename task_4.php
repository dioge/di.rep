<pre>

<?php

    for($i = 1000; $i <= 9999; $i++){

        if($i%2 == 0){
            
            $i .= '';
            
            for($j = 0; $j < strlen($i); $j++){

                $j_array[$j] = $i[$j];
            }
            
            $i_array[] = $j_array;
        }
    }

    for($i = 0; $i < (count($i_array)); $i++){
        for($j = 0; $j <= (count($i_array[$i])); $j++){

            if($i_array[$i][$j+1] === NULL){
                
                $inc_numbers[] = implode($i_array[$i]);
                break;
                
            }elseif($i_array[$i][$j] > $i_array[$i][$j+1] || $i_array[$i][$j] == $i_array[$i][$j+1]){

                break;
                
            }elseif($i_array[$i][$j] < $i_array[$i][$j+1]){
                
                continue;
            }
        }
    }    
    
    echo ("Increasing sequence: ");
    var_dump ($inc_numbers);
    
    for($i = 0; $i < (count($i_array)); $i++){
        for($j = 0; $j <= (count($i_array[$i])); $j++){

            if($i_array[$i][$j+1] === NULL){
                
                $dec_numbers[] = implode($i_array[$i]);
                break;
                
            }elseif($i_array[$i][$j] < $i_array[$i][$j+1] || $i_array[$i][$j] == $i_array[$i][$j+1]){

                break;
                
            }elseif($i_array[$i][$j] > $i_array[$i][$j+1]){
                
                continue;
            }
        }
    }    
    
    echo ("<br>"."Decreasing sequence: ");
    var_dump ($dec_numbers);
?>
