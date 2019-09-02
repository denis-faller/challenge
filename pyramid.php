<?php

//Нарисуйте пирамидку, не используя цикл:
// 1
// 22
// 333
// 4444
// 55555
// и так далее

function pyramid($startElement, $nextElement, $num){
	if($nextElement-1 < $num){
		if($startElement < $nextElement){
			echo $nextElement-1;
			$startElement++;
			pyramid($startElement, $nextElement, $num);
		}
		elseif($startElement == $nextElement){
			echo '<br>';
			$startElement = 1;
			$nextElement++;
			pyramid($startElement, $nextElement, $num);
		}
	}
}

pyramid(1, 2, 6);
?>