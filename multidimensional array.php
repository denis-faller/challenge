<?php

// Дан многомерный массив $arr. Напишите функцию, которая принимает строки вида 'строка1.строка2.строка3' - буквы разделенные точками, 
// а возвращает элемент многомерного массива $arr['строка1']['строка2']['строка3']


function multidimensionalArray($arr, $str){
	$arrKey = explode(".", $str);
	
	$result = $arr;
	while($k = array_shift($arrKey)){
		$result = $result[$k];
	}
	
	return $result;
}

$arr["key1"]["key2"]["key3"] = "value";
$str = "key1.key2.key3";

print_r(multidimensionalArray($arr, $str));
?>