<?php

// Дан массив с числами. Проверьте, что элементы этого массива идут по возрастанию или убыванию чисел.

function itemsInOrder($array){
	$i = 0;
	$flagAsc = false;
	$flagDesc = false;
	while($i < count($array)-1){
		if($array[$i] > $array[$i+1]){
			if($flagAsc){
				return false;
			}
			$flagDesc = true;
		}
		if($array[$i] < $array[$i+1]){
			if($flagDesc){
				return false;
			}
			$flagAsc = true;
		}
		$i++;
	}
	
	return true;
}


echo itemsInOrder(array(1,2,3));

?>