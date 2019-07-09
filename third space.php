<?

// Удалить третий пробел.

// Дана строка. Удалите из нее третий пробел. Пример: строка '12 34 56 78' станет '12 34 5678'.

$str = '12 34 56 78';

function deleteThirdSpace($str){
	$i = 0;
	$countSpaces = 0;
	while($i < strlen($str)){
		if($str[$i] == " "){
			$countSpaces++;
			if($countSpaces == 3){
				$str[$i] = "";
			}
		}
		$i++;
	}
	return $str;
}

echo deleteThirdSpace($str);

?>