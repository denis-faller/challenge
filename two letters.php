<?php

// Дана строка. Оставьте в ней только те слова, где есть 2 одинаковые буквы (не обязательно рядом стоящие).

function twoLetters($string){
	$words = explode(" ", $string);
	
	foreach($words as $word){
		$wordArray = str_split($word);
		
		$count = 0;
		foreach($wordArray as $letterPattern){
			$count = 0;
			foreach($wordArray as $letter){
				if($letterPattern == $letter){
					$count++;
				}
			}
			if($count == 2){
				$resultWords[] = implode($wordArray);
				break;
			}
		}
	}
	
	return $resultWords;
}

$string = "такое слово";

print_r(twoLetters($string));

?>