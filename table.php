<?php

function table($row, $col){
	
	$cntRow = 0;
	for($i = 1; $i <= $row*$col; $i++){
		
		echo $i. " ";
		
		if(($i % $col) == 0){
			echo "</br>";
		}
	}
}

table(5, 3)
?>