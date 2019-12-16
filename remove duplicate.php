<?php

// Дан массив array(1,1,1,1,5,5,5,5,3,2,1,1,5). Нужно создать функцию удаляющую дубли идущие последовательно, 
// т.е. получить такой массив array(1,5,3,2,1,5);

function removeDuplicate($arr){
	$resArr = [];
	$i = 0;
	while($i < count($arr)){
		if($i != 0){
			if($arr[$i-1] != $arr[$i]){
				$resArr[] = $arr[$i];
			}
		}
		else{
			$resArr[] = $arr[$i];
		}
		$i++;
	}
	return $resArr;
}

print_r(removeDuplicate(array(1, 2, 1, 1, 5, 5, 3, 3, 3)));

?>