<?php

//Найдите сумму целых чисел от 1 до 1000 самым незатратным по ресурсам и самым быстро работающим способом.


$arrayNumbers = range(1, 1000);

function sumNumbers($arr){
	$sum = 0;
	foreach($arr as $val){
		$sum += $val;
	}
	
	return $sum;
}

echo sumNumbers($arrayNumbers);


?>