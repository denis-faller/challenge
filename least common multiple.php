<?
// Найти НОК. 

// Сделайте функцию, которое будет принимать 2 числа, а возвращать их НОК - наименьшее общее кратное. 
// НОК двух чисел - это самое маленькое число, которое делится и на одно, и на второе число. 
// Пример: числа 12 и 15 имеют НОК 60. Число 60 делится и на 12, и на 15 и это самое минимальное такое число.


$arr[0] = [13, 17];
$arr[1] = [12, 15];
$arr[2] = [4, 3];
$arr[3] = [2, 6];
$arr[4] = [5, 10];
$arr[5] = [3, 7];
$arr[6] = [8, 9];

function leastCommonMultiple($numbers){
	if($numbers[0] > $numbers[1]){
		$dividend = $numbers[0];
		$divider	= $numbers[1];
	}
	else{
		$dividend = $numbers[1];
		$divider	= $numbers[0];
	}

	$remainder = $dividend;

	while($remainder){
		$remainder = $dividend % $divider;
		$dividend = $divider;
		$divider = $remainder;
	}
	$greatestCommonDivisor = ($numbers[0]*$numbers[1])/$dividend;

	echo $greatestCommonDivisor;
}
foreach($arr as $key=>$value){
	echo leastCommonMultiple($value);
	echo '<br>';
}
?>