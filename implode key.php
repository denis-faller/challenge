<?php

// Напишите свою функцию implode, которая будет сливать в строку не только элементы, но и ключи массива.

function implodeKey($separator1, $separator2, $array, $flag = null){
	$res = "";
	$i = 0;
	foreach($array as $key=>$value){
		if($flag == "reverse"){
			if($i == 0){
				$res .= $value.$separator1.$key;
			}
			else{
				$res .= $separator2.$value.$separator1.$key;
			}
		}
		else{
			if($i == 0){
				$res .= $key.$separator1.$value;
			}
			else{
				$res .= $separator2.$key.$separator1.$value;
			}
		}
		$i++;
	}
	return $res;	
}

$arr = array('a'=>1, 'b'=> 2, 'c'=>3);
echo implodeKey(':', ', ', $arr);

?>