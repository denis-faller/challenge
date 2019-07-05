<?

// Разложение числа на простые множители.

// Дано число. Разложите его на простые множители. Пример: 12 - это 2 * 2 * 3.

$arr[0] = 12;
$arr[1] = 126;
$arr[2] = 255;
$arr[3] = 44;
$arr[4] = 56;
$arr[5] = 18;
$arr[6] = 114;
 

function getPrimeFactors($number){
	$p = [];
	$arrayPrimeFactors = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97, 101, 103, 107, 109, 113, 127, 131, 137, 139, 149, 151, 157, 163, 167, 173, 179, 181, 191, 193, 197, 199];
	
	$k = 0;
	while($k < count($arrayPrimeFactors)){
		
		if($number == 1){
			break;
		}

		$q = $number/$arrayPrimeFactors[$k];
		$q = abs($q);
		
		$r = $number%$arrayPrimeFactors[$k];
		
		if($r == 0){
			$p[] = $arrayPrimeFactors[$k];
			$number = $q;
		}
		elseif($q > $arrayPrimeFactors[$k]){
			$k++;
		}
		elseif($q <= $arrayPrimeFactors[$k]){
			$p[] = $number;
			break;
		}
	}
	
	return $p;
}

$i = 0;
while($i < count($arr)){
	print_r(getPrimeFactors($arr[$i]));
	echo '<br>';
	$i++;
}

?>