<?php

// Написать функцию, на вход которой подается массив с числовыми элементами. Функция должна вернуть отсортированный массив по частоте повтора элементов в нем

function countSort($a, $b){
  if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

function trickyArraySorting($arr){
	
	$cntArr = [];
	foreach($arr as $value){
		if(isset($cntArr[$value])){
			$cntArr[$value]++;
		}
		else{
			$cntArr[$value] = 1;
		}
	}
	
	uasort($cntArr, "countSort");
	
	return $cntArr;
}


print_r(trickyArraySorting(array(2, 1, 3, 4, 2, 4, 4)));
?>