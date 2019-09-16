<?php

// В PHP есть функция array_merge_recursive, которая корректно сливает массивы, даже есть у них есть одинаковые ключи
// Создайте свою функцию, которая будет реализовывать такое поведение

function array_merge_recursive_ex(array $array1, array $array2){
	
	$merged = $array1;
	
	foreach($array2 as $key=>$value){
		if(isset($value) && is_array($value)){
			$merged += array_merge_recursive_ex($merged, $value);
		}
		elseif(is_numeric($key)){
			$merged[] = $value;
		}
		else{
			if(isset($merged[$key])){
				$merged[$key] = array($merged[$key]);
				$merged[$key][] = $value;
			}
			else{
				$merged[$key] = $value;
			}
		}
	}
	
	
	return $merged;
	
}

print_r(array_merge_recursive_ex(['a'=>1, 'b'=>2], ['a'=>3, 'c'=>4]));
?>

