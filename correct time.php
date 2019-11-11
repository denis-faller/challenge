<?php

// Дано время в формате "часы:минуты". Проверьте то, что время является корректным: часы от 00 до 23, а минуты от 00 до 59.

function correctTime($time){
	
	$timeArr = explode(":", $time);
	
	if(isset($timeArr[0])){
		$hours = $timeArr[0];
		if($hours < 0 || $hours > 23){
			return false;
		}
	}
	
	if(isset($timeArr[1])){
		$minutes = $timeArr[1];
		if($minutes < 0 || $minutes > 59){
			return false;
		}
	}
	
	if(isset($timeArr[2])){
		$seconds = $timeArr[2];
		if($seconds < 0 || $seconds > 59){
			return false;
		}
	}
	
	return true;
}


echo correctTime("12:00:01");

?>