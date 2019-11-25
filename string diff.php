<?php

// Даны две почти одинаковых строки. По условию задачи разница между строками может быть только в одном месте, к примеру: '12345' и
// '123!!!45' - здесь разница между первой и второй строкой в том, что добавлены 3 восклицательных знака


function stringDiff($str1, $str2){
	
	// Поменять местами, если удалены символы
	if(strlen($str1) > strlen($str2)){
		$temp = $str1;
		$str1 = $str2;
		$str2 = $temp;
	}
	
	$str1 = str_split($str1);
	$str2 = str_split($str2);
	$i = 0;
	$dispIndex = false;
	$res = [];
	while($i < count($str2)){
		if($dispIndex){
			if($str1[$dispIndex] != $str2[$i]){
				$res[] = $str2[$i];
			}
			else{
				$dispIndex++;
			}
		}
		if(!$dispIndex){
			if($str1[$i] != $str2[$i]){
				$dispIndex = $i;
				$res[] = $str2[$i];
			}
		}
		$i++;
	}

	return $res;
	
}

print_r(stringDiff("12345", "1245"));

?>