<?php

// Дана строка '12345678'. Сделайте из нее '21436587'. Строка, конечно же, может быть любой.

$string = "12345678";

function transposition($str){
	
	$arr = str_split($str);	
	
	$i = 0;
	
	while($i < count($arr)){
		if($i != 0){
			if($i%2 != 0){
				$temp = $arr[$i-1];
				$arr[$i-1] = $arr[$i];
				$arr[$i] = $temp;
			}
		}
		$i++;
	}
	
	return implode($arr);
}

echo transposition($string);
?>