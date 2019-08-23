<?php

// Нарисуйте таблицу вида:
// * 2 *
// 3 * 6
// * 8 *

// То есть по обоим диагоналям звездочки.

function diagonalMatrix($n){
	
	$arr = array();
	
	$cnt = 1;
	for($i = 1; $i <= $n; $i++){
		for($j = 1; $j <= $n; $j++){
			if($i == $j || $i == $n - $j + 1){
				$arr[$i][$j] = "*";
			}
			else{
				$arr[$i][$j] = $cnt;
			}
			$cnt++;
		}
	}
	for($i = 1; $i <= $n; $i++){
		for($j = 1; $j <= $n; $j++){
			echo $arr[$i][$j];
			  if($j==$n) echo '<br>';
		}
	}
	
}

diagonalMatrix(4);


?>