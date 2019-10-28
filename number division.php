<?php

// Дано целое число. Разбейте его на случайное количество целых чисел так, чтобы в сумме они давали это число. 
// Пример: 100 можно разбить на 50+50, или 51+49, или 20+30+50. Количество фрагментов должно быть любым, случайным, сами фрагменты тоже должны быть случайными.
function numberDivision($num){
	$sumRnd = 0;
	$rnd[] = rand(1, $num-1);
	$sumRnd = array_sum($rnd);
	while($sumRnd != $num){
		$rnd[] = rand(1, $num-$sumRnd);
		$sumRnd = array_sum($rnd);
	}
	
	return $rnd;
}


print_r(numberDivision(100));


?>