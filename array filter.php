<?php

// Дан массив с числами. Запишите в новый массив только те числа, в которых есть цифра 5.

function arrayFilter($arr){
	$res = [];
	foreach($arr as $value){
		$str = (string)$value;

		if(mb_strpos($str, "5") !== false){
			$res[] = $str;
		}
	}
	
	return $res;
}

$arr = array(4, 5, 3, 21, 45);
print_r(arrayFilter($arr));

?>