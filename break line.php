<?php
 
// Дана строка с любыми символами. Для примера пусть будет '1234567890'. 
// Нужно разбить эту строку в массив таким образом: array('1', '23', '456', '7890') и так далее пока символы в строке не закончатся. 

function breakLine($str){
	$arrStr = str_split($str);
	$i = 0;
	$j = 0;
	$l = 0;
	$step = 0;
	$arrRes = [];
	while($i < count($arrStr)){
		if($i == $j){
			$str = "";
			while($l < $j+1){
				$str .= $arrStr[$l];
				$l++;
			}
			$arrRes[] = $str;
			if($j == 0){
				$j = 2;
				$step = 3;
			}
			else{
				$j += $step;
				$step++;
			}
		}
		$i++;		
	}
	
	return $arrRes;
 }
 
 print_r(breakLine("123456789"));


?>