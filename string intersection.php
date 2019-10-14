<?php

// Даны 2 строки. Выведите на экран только те слова, которые содержатся в обеих строках

function stringIntersection($str1, $str2){
	$words1 = explode(" ", $str1);
	$words2 = explode(" ", $str2);
	
	$res = array();
	foreach($words1 as $word1){
		foreach($words2 as $word2){
			if($word1 == $word2){
				$res[] = $word1;
				break;
			}
		}
	}
	
	return $res;
}

$str1 = "Определение в синтаксисе второстепенный член предложения";
$str2 = "Определение логическая операция";

print_r(stringIntersection($str1, $str2));

?>