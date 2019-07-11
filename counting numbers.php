<?
// Подсчет цифр в массиве.

// Дан массив с числами. Подсчитайте количество цифр 3 в данном массиве. Пример: [13, 35, 3, 443] - в массиве 4 цифры 3.

$arr = [13, 35, 3, 443];

function countingNumbers($arr){
	$count = 0;
	$i = 0;
	while($i < count($arr)){
		$string = strval($arr[$i]);
		$j = 0;
		while($j < strlen($string)){
			if($string[$j] == "3"){
				$count++;
			}
			$j++;
		}
		$i++;
	}
	return $count;
}

echo countingNumbers($arr);