<?php

// Дан двухмерный массив. Напишите функцию, которая будет сортировать его подмассивы по одному из ключей подмассива.

function sortMultidimensionalArray($arr, $keySort){
	foreach($arr as $key=>$arr2){
		foreach($arr2 as $key2=>$val){
			if(isset($arr2[$keySort])){
				if($arr2[$keySort] == $val && $keySort == $key2){
					$res[] = $arr2;
				}
			}			
		}
	}
	$cnt = count($res);
	for($j = 0; $j < $cnt-1; $j++){
		$flag = 0;
		for($i = 0; $i < $cnt-$j-1; $i++){
			if($res[$i][$keySort] > $res[$i+1][$keySort]){
				$temp = $res[$i+1];
				$res[$i+1] = $res[$i];
				$res[$i] = $temp;
				$flag = 1;
			}
		}
		if($flag == 0){
			break;
		}
	}
	
	return $res;
}

$arr = array(
	array('key1'=>5, 'key2'=>3),
	array('key1'=>4, 'key2'=>4),
	array('key1'=>3, 'key2'=>7),
);

print_r(sortMultidimensionalArray($arr, "key1"));

?>