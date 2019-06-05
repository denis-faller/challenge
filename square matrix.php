<?php

/*
Дан массив. Выведите его элементы на экран следующим образом:
1 4 7
2 5 8
3 6 9

Массив может быть любой длины. Таблица всегда должна получаться квадратной. Если элементов не хватает - в последнем столбце будет пару пустых ячеек.
*/


// Тестовые данные
$arr[0] = [0];
$arr[1] = [1, 0];
$arr[2] = [1, 4, 7];
$arr[3] = [1, 4, 7, 2];
$arr[4] = [1, 4, 7, 2, 5, 8];
$arr[5] = [1, 4, 7, 2, 5, 8, 3, 6, 9];
$arr[6] = [1, 4, 7, 2, 5, 8, 3, 6, 9, 1];

// Возвращает размерность матрицы
function getDimension(array $row){
	$index = 1;
	$range = 1;
	$dimension = 1;
	$cnt = count($row);
	foreach($row as $val){
		if($index > $range){
			$range = $dimension*$dimension;
			$dimension++;
		}
		$index++;
	}
	if($cnt > 2){
		$dimension--;
	}
	return $dimension;
}


// Выводим таблицу
foreach($arr as $row){
	$dimension = getDimension($row);
	$indexRow = 1;
	foreach($row as $val){
		echo $val;
		if($indexRow == $dimension){
			echo '<br>';
			$indexRow = 0;
		}
		$indexRow++;
	}
	echo '<br><br>';
	
}

?>