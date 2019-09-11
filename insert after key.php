<?php

// Напишите функцию, которая будет вставлять заданные элементы в массив после заданного ключа.

function insertAfterKey($array, $keyAfterInsert, $valueInsert){
		
	if (array_key_exists($keyAfterInsert, $array)) {
		$i = 1;
		foreach($array as $key=>$value){
			if($key == $keyAfterInsert){
				array_splice($array, $i, 0, $valueInsert);
			}
			$i++;
		}
	}
	
	return $array;
}

print_r(insertAfterKey(['a'=>1, 'b'=>2, 'c'=>3], 'b', [5, 6]));
?>