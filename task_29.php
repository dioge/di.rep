<form action="task_29.php" method="get">

	<p>Задайте последовательность от 0 до n.</p>
	<input type="text" name="n">
	
	<p>Введите заданное число.</p>
	<input type="text" name="k">

	<p></p>
	<input type="submit" value="Подтвердите ввод.">

</form>

<pre>

<?PHP

	$result_array = array(); 
	
	$combination = array();
	
	$n .= $_GET["n"];
	
	echo ("Последовательность от 0 до ".$_GET["n"]."\n");
	
	$n_length = strlen($n);
	
	for ($i = 0; $i < $n_length; ++$i) {
		
		$n_array[] = $n[$i];
	}
	
	$n_count = count($n_array);
	
	
	// Получаем массив из комбинаций цифр чисел последовательности
	
	function get_combinations(array $array, $elements_number, $count_) {
		
		global $result_array, $combination;

		create_combination_array(0, $elements_number, $array, $count_);
		
		return $result_array;

	}

	function create_combination_array($start, $elements_number_, $array_, $count_) {
		
		global $result_array, $combination;

		if ($elements_number_ == 0){
			
			array_push($result_array, $combination);

		}else{
			
			for ($i = $start; $i <= $count_ - $elements_number_; ++$i) {
				
				array_push($combination, $array_[$i]);
				
				create_array($i + 1, $elements_number_ - 1, $array_, $count_);

				array_pop($combination);
				
			}
		}
	}
	
	for($i = 2; $i < $n_count; $i++){
		
		get_combinations($n_array, $i, $n_count);
	}


	// Проверка на соответствие условию

	$result_array_count = count($result_array);
	
	for($i = 0; $i < $result_array_count; $i++){
		
		$i_count = count($result_array[$i]);
		
		for($j = 0; $j < $i_count; $j++){

			$final_array[$i] .= $result_array[$i][$j];

			$sum_array[$i] += $result_array[$i][$j];
		}
		
		if($sum_array[$i] == $_GET["k"]){
				
			$final_numbers_array[] = $final_array[$i];
		}
	}
	
	// Вывод

	if($final_numbers_array){
		
		echo ("Для следующих чисел последовательности справедливо условие в отношении заданного числа ".$_GET["k"]."<br>");
		
		print_r($final_numbers_array);

	}else{
			
		echo ("В последовательности отсутствуют числа, удовлетворяющие условию");
	}

?>