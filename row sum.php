<?php

// Дана строка с цифрами, например: '12345678'. 
// Просуммируйте числа этой строки вот таким образом: 12+34+56+78.

function rowSum($str){	
	$str = str_split($str);
	$i = 0;
	$num = [];
	while($i < count($str)){
		if($i % 2){
			$num[] = (int)($str[$i-1].$str[$i]);
		}
		$i++;
	}
	
	return array_sum($num);
}

echo rowSum("1234");

?>