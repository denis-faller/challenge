<?php

// Нарисуйте таблицу вида:
// 1 2 3
// 3 4 6
// 7 8 9
// Только ваша таблица должна быть размером не 3 на 3, а любого заданного размера, 
// в том числе и прямоугольником, например, 5 на 10.

function table($row, $col){
	
	$cntRow = 0;
	for($i = 1; $i <= $row*$col; $i++){
		
		echo $i. " ";
		
		if(($i % $col) == 0){
			echo "</br>";
		}
	}
}

table(5, 3);
?>