<?php

// Дан массив. Запишите в другой массив N случайных элементов из него так, чтобы один элемент был использован только один раз.

function randomArrayElement($arr, $n){
		$res = [];
		$i = 0;
		while($i < $n){
			$cnt = count($arr);	
			$index = rand(0, $cnt-1);
			$res[] = $arr[$index];
			unset($arr[$index]);
			$arr = array_values($arr);
			$i++;
		}
		return $res;
}

$arr = [5, 4, 3, 2, 1];

print_r(randomArrayElement($arr, 4));
?>