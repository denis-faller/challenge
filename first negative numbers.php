<?php
// Дан массив с числами. 
// Выведите первые 3 отрицательных числа из этого массива (дубли не принимаются).

$arr = array(-1, 1, -1, -2 , 2, -3, 3);
function firstNegativeNumbers($arr){
	$index = 0;
	$result = [];
	foreach($arr as $value){
		if($value < 0 && $index < 4 && (array_search($value, $result) === false)){
			$result[] = $value;
			$index++;
		}
	}

	return $result;
}

print_r(firstNegativeNumbers($arr));

?>