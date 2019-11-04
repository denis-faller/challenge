<?php

// Найти все числа от 1 до 1 000 000, которые делятся на числа от 1 до 9.

function divideNumbers(){
	$array = range(1, 9);
	$res = [];
	for($i = 2; $i < 1000000; $i++){
		foreach($array as $val){
			if(fmod($i, $val) != 0){
				continue 2;
			}	
		}
		$res[] = $i;		
	}
	
	return $res;
}

print_r(divideNumbers());

?>