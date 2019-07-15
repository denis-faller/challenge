<?

// Добрый array_unique.

// Сделайте аналог функции array_unique, который будет удалять дубли, встречающиеся более 3-х раз.

// Тестовые данные
$arr[0] = [0];
$arr[1] = [1, 4, 7, 2, 4, 4, 2, 4];
$arr[2] = [1, 4, 7, 2, 2, 7, 2, 6, 2];
$arr[3] = [4, 1, 4, 7, 2, 1, 4, 7, 4, 1, 5, 1, 3];

function kindArrayUnique($arr){
	$i = 0;
	$cnt = count($arr);
	while($i < $cnt){
		if($i > 0){
			$j = $i;
			$countDuplicate = 0;
			while($j != 0){
				if($arr[$i] == $arr[$j-1]){
					$countDuplicate++;
					if($countDuplicate > 2){
						$l = 0;
						while($l < $cnt){
							if($arr[$i] == $arr[$l]){
								unset($arr[$l]);
							}
							$l++;
						}
					}
				}
				$j--;
			}
		}
		$i++;
	}
	return $arr;
}

$i = 0;
while($i < 4){
	print_r(kindArrayUnique($arr[$i]));
	$i++;
}
?>