<?php

// Дана строка. Перемешайте символы этой строки в случайном порядке.

function characterShuffle($string){
	
	$string = str_split($string);
	
	$i = 0;
	$cntSource = count($string);
	while($i < $cntSource){
		$cnt = count($string) - 1;
		$rnd = rand(0, $cnt);
		$res[] = $string[$rnd];
		unset($string[$rnd]);
		$string = array_values($string);
		$i++;
	}
	
	return implode("", $res);
}

echo characterShuffle("word");
?>