<?
// Самое длинное слово.

// Дана строка с текстом. Выведите на экран самое длинное слово из этого текста (или слова если несколько слов имеют одинаковую длину).
$text = "Просто обычный текст. Просто обычный текстец.";

function longWord($str){
	$i = 0;
	$j = 0;
	$words = [];
	$word = "";
	$length = mb_strlen($str, '8bit');
	// Разбиваем текст на слова
	while($i < $length){
		if((array_search($str[$i], array(" ", ",", ".", ";", "!", "?")) !== false) || $i == ($length-1)){
			if($word != ""){
				$words[$j] = $word;
				$j++;
				$word = "";
			}
			$i++;
			continue; 
		}
		
		$word .= $str[$i];
		$i++;
	}
	$l = 0;
	$resultWords = [];
	// Выбираем слова в порядке роста длины
	while($l < count($words)){
		if($l > 0){
			$lengthWord = mb_strlen($words[$l], '8bit');
			$lengthWordResult = mb_strlen(end($resultWords), '8bit');
			if($lengthWord >= $lengthWordResult){
				$resultWords[] = $words[$l];
			}
		}
		else{
			$resultWords[] = $words[$l];
		}
		$l++;
	}
	$k = (count($resultWords)-1);
	// Генерируем результирующий массив
	while($k != 0){
		$lengthWord1 = mb_strlen($resultWords[$k], '8bit');
		$lengthWord2 = mb_strlen($resultWords[$k-1], '8bit');
		$result[] = $resultWords[$k];
		if($lengthWord1 > $lengthWord2){
			break;
		}
		$k--;

	}
	return array_unique($result);
}

print_r(longWord($text));
?>