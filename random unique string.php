<?php

// Реализуйте скрипт (или функцию), который будет генерировать случайную строку, которая не встречалась ранее.

function letterRand($lenght){
	$i = 0;
	$res = "";
	while($i < $lenght){
		$res .= chr(rand(97, 122));
		$i++;
	}
	return $res;
}

function randomUniqueString(){
	return time().letterRand(5);	
}

echo randomUniqueString();

?>