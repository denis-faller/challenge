<?php 

// Дан массив рандомных чисел рандомного размера
// Есть рандомное число
// Нужно написать функцию которая вернет все возможные комбинации чисел (в виде массива), которые в сумме будут равны рандомному числу $sum

function combination($arr, $n, $r, $sum) 
{ 
    $data = array(); 
  
    combinationUtil($arr, $data, 0, $n - 1, 0, $r, $sum); 
} 

$result = array();
$indexArray = 0;

function combinationUtil($arr, $data, $start, $end, $index, $r, $sum) 
{ 
    if ($index == $r) 
    { 
		global $result, $indexArray;
		$currentSum = 0;
        for ($j = 0; $j < $r; $j++){
            $currentSum += $data[$j];
		}
		if($currentSum == $sum){
			for ($j = 0; $j < $r; $j++){
				$result[$indexArray][] = $data[$j];
			}
		}
		$indexArray++;
        return; 
    } 
  
    for ($i = $start;  $i <= $end && $end - $i + 1 >= $r - $index; $i++) 
    { 
        $data[$index] = $arr[$i]; 
        combinationUtil($arr, $data, $i + 1, $end, $index + 1, $r, $sum); 
    } 
} 
  
$arr = array(1, 2, 3, 4, 5); 
$r = 4; 
$n = sizeof($arr);
$sum = 13;
combination($arr, $n, $r, $sum); 
print_r($result);
?> 