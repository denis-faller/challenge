<?php

// Дана строка с маленькими буквами. 
// Сделайте заглавными половину случайных букв этой строки, игнорируя пробелы.

function halfUpperLetters($string){
	$string = str_split($string);
	
	$i = 0;
	$cnt = count($string);
	$arrUpper = array_rand($string, intval($cnt/2));
	while($i < count($arrUpper)){
		$string[$arrUpper[$i]] = mb_strtoupper($string[$arrUpper[$i]]);
		$i++;
	}
	
	return implode("", $string);
}


echo halfUpperLetters("word");

?>