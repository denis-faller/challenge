<?php

// Дан массив. Найдите второй по величине элемент, после максимального.

function secondBySize($arr){
	$n = count($arr);
	for($j = 1;$j < $n; $j++){
		$flag = false;
		for($i = 1; $i < $n-$j; $i++){
			if($arr[$i] > $arr[$i+1]){
				$temp = $arr[$i];
				$arr[$i] = $arr[$i+1];
				$arr[$i+1] = $temp;
				$flag = true;
			}
		}
		if(!$flag){
			break;
		}
		
	}
	
	return $arr[$n-2];
}

echo secondBySize(array(1, 4, 5, 2, 2));


?>