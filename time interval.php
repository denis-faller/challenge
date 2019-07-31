<?php

// Сделайте функцию, которая будет принимать промежуток времени в формате '1 день', '2 дня', '2 дня и 3 месяца' и тп 
// в количество секунд, соответствующего указанному промежутку.

$test = "11 дней 2 месяца 5 лет";
function timeInterval($str){
	preg_match_all('/[0-9]+ (день|дн|месяц|год|лет)/', $str, $matches);
	
	$daySeconds = 0;
	if(isset($matches[1][0]) && isset($matches[0][0])){
		$day = (int)str_replace($matches[1][0], "", $matches[0][0]);
		$daySeconds = $day*24*60*60;
	}
	$monthSeconds = 0;
	if(isset($matches[1][1]) && isset($matches[0][1])){
		$month = (int)str_replace($matches[1][1], "", $matches[0][1]);
		$monthSeconds = $month*30*24*60*60;
	}
	$yearSeconds = 0;
	if(isset($matches[1][2]) && isset($matches[0][2])){
		$year = (int)str_replace($matches[1][2], "", $matches[0][2]);
		$yearSeconds = $year*365*24*60*60;
	}
	
	$seconds = $daySeconds + $monthSeconds + $yearSeconds;
	
	return $seconds;
}

echo timeInterval($test);
?>