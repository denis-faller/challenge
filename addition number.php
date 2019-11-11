<?php

// Дано число. Напишите функцию func(число, сколько знаков), которая будет принимать число и делать так, чтобы после запятой у него всегда было N знаков.
// Если знаков больше, чем нужно - функция должна округлить число по правилам округления.

function additionNumber($number, $numberSigns){
	
	if(is_int($number)){
		$i = 0;
		while($i < $numberSigns){
			if($i == 0){
				$number = $number.".0";
			}
			else{
				$number = $number."0";
			}
			$i++;
		}			
	}
	else{
		$number = (string)$number;
		$number = str_split($number);
		$i = 0;
		$j = 0;
		$flagPoint = false;
		while($j < count($number)){
			if($flagPoint){
				$i++;
			}
			if($number[$j] == "."){
				$flagPoint = true;
			}
			$j++;
		}
		
		$number = implode($number);
		
		while($i < $numberSigns){
			$number = $number."0";
			$i++;
		}
		
		if($i > $numberSigns){
			$number = round($number, $numberSigns);
		}
		
	}
	
	return $number;
}

echo additionNumber(2.567, 2);
?>