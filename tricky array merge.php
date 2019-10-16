<?php

// Напишите функцию, которая будет сливать два массива таким образом: 
// из, к примеру, [1, 2, 3] и ['a', 'b', 'c'] она сделает [1, 'a', 2, 'b', 3, 'c'].

function trickyArrayMerge($arr1, $arr2){
	
	$cnt1 = count($arr1);
	$cnt2 = count($arr2);
	if($cnt1 == $cnt2){
		$i = 0;
		while($i < $cnt1){
			$res[] = $arr1[$i];
			$res[] = $arr2[$i];
			$i++;
		}
	}		
	
	return $res;
	
}

$arr1 = [1, 2, 3];
$arr2 = ['a', 'b', 'c'];

print_r(trickyArrayMerge($arr1, $arr2));

?>