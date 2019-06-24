<?
// Противоположность array_unique.

// Реализуйте функцию-противоположность array_unique. Наша функция должна оставлять элементы, имеющие дубли.

// Тестовые данные
$arr[0] = [0];
$arr[1] = [1, 0];
$arr[2] = [1, 4, 4];
$arr[3] = [1, 4, 7, 7];
$arr[4] = [1, 4, 7, 2, 4, 7];
$arr[5] = [1, 4, 7, 2, 2, 7, 4, 6, 9];
$arr[6] = [4, 1, 4, 7, 2, 1, 4, 4, 7, 2, 1, 5];

function array_duplicate($array){
	
	for($i = 0; $i < count($array); $i++){
		if($i > 0){
			$j = $i;
			while($j != 0){
				if($array[$i] == $array[$j-1]){
					$duplicateFlag = array_search($array[$i], $result);
					if(!$duplicateFlag && $duplicateFlag !== 0){
						$result[] = $array[$i];
						break;
					}
				}
				$j--;
			}
		}
	}
	
	return $result;
}
$i = 0;
while($i < 7){
	print_r(array_duplicate($arr[$i]));
	$i++;
}
?>