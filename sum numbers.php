<?php

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