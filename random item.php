<?php

// Дан массив array(1,2,3,4,5,6,7,8,9,10). Нужно выбрать три случайных элемента так, чтобы их значение совпадало с номером в массиве (нумерация с единицы), a все остальные элементы затереть. 
// Пример: array(-,-,3,-,-,-,7,-,9,-).

function randomItem($array){
	$i = 0;
	$val = [];
	while($i < count($array)){
		if(($i+1) == $array[$i]){
			$val[] = $i;
		}			
		$i++;		
	}

	$keys = array_rand($val, 3);
	
	$i = 0;
	while($i < count($array)){
		if(isset($keys[$i])){
			$res[$keys[$i]] = $array[$keys[$i]];
		}
		if(!isset($res[$i])){
			$res[$i] = "-";
		}
		$i++;		
	}
	
	ksort($res);
	return $res;
}

print_r(randomItem(array(1,2,3,4,5,6,7,8,9,10)));
?>