<?php

// Дан многомерный массив любой вложенности. Подсчитайте количество конечных элементов (то есть элементов не-массивов).

$res = [];
function finiteElements($arr){
	global $res;
	foreach($arr as $val){
		if(is_array($val)){
			finiteElements($val);
		}
		else{
			$res[] = $val;
		}
	}
	
	return $res;
}

$arr = array("key1"=>array(array(2,"key2"=> 3),4), "key3");

echo count(finiteElements($arr));
?>