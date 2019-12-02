<?php

// Сделайте свою функцию округления, похожую на функцию round, но с отличиями: ваша функция должна округлять дробь до заданного знака 
// после запятой, например, так func(дробь, 3) - оставить 3 знака после запятой. Кроме того, функция должна округлять целые числа, к 
// примеру, func(123498, -3) - округлит число до 123000. Такое: func(дробь, 0) - должно округлять до целых.

function userRound($num, $n){
	
	$string = strval($num);
	$string = str_split($string);
	
	$i = 0;
	$j = 0;
	$flagRound = false;
	$res = "";
	
	if($n > 0){
		while($i < count($string)){
			if($flagRound){
				$j++;
			}
			
			if($string[$i] == "."){
				$flagRound = true;
			}
			
			if(($j-1) == $n){
				break;
			}
			
			$res .= $string[$i];
			
			$i++;
		}
	}
	elseif($n == 0){
		$res = intval(implode("", $string));			
	}
	else{
		$i = count($string)-1;
		while($i > 0){
			
			if($j == abs($n)){
				break;
			}
			
			$string[$i] = 0;
			
			$j++;
			$i--;
		
		}
		$res = implode("", $string);
	}
		
	
	return $res;
}


echo userRound(1234.56789, 2);

?>