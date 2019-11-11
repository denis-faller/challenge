<?php

// Найдите факториал числа
// Решите задачу, не используя цикл

$res = 1;

function factorial($i, $n){
	global $res;
	if($i < $n){
		$i++;
		$res = $i * $res;
		factorial($i, $n);
	}
	return $res;
}

echo factorial(1, 5);

?>