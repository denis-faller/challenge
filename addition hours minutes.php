<?php

// Напишите функцию, которая корректно будет складывать часы и минуты. Примеры: на вход функции подается такое - 1ч20мин+50мин
// в результате функция выведет2ч10мин.

function parseToMinutes($time){
	preg_match("/(\d+)час$/", $time, $matches);
	if(isset($matches[1])){
		$hours = $matches[1];
		$minutesRes =$hours*60;
	}
	
	preg_match("/(\d+)мин$/", $time, $matches);
	if(isset($matches[1])){
		$minutesRes = $matches[1];
	}
	
	preg_match("/(\d+)час(\d+)мин$/", $time, $matches);
	if(isset($matches[1])){
		$hours = $matches[1];
		$minutes = $matches[2];
		$minutesRes =$hours*60+$minutes;
	}
	return $minutesRes;
}

function additionHoursMinutes($time1, $time2){
	$minutes1 = parseToMinutes($time1);
	$minutes2 = parseToMinutes($time2);
	$minutesRes = $minutes1+$minutes2;
	$hours = (int)($minutesRes/60);
	$minutes = $minutesRes-$hours*60;
	return $hours."час".$minutes."мин";
}

echo additionHoursMinutes("1час20мин", "50мин");
?>