<?php

// Дано число. Узнайте, сколько знаков у него в дробной части.

function fraction($number){
	$stringNumber = strval($number);
	
	$fraction = explode(".", $stringNumber);
	
	$fraction = $fraction[1];
	
	return $fraction;
}

echo strlen(fraction(3.14));

?>