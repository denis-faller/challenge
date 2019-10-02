<?php

// Создайте массив вида [1, [2], [[3]], [[[4]]]], вместо 4 может быть любое целое значение

function strangeArray($index, $count, $result){

	if($count == 0){
		return $index+1;
	}
	elseif($index < $count){
		$result[$index] = strangeArray($index+1, $count, $result);
		return $result;
	}
	elseif($index == $count){
		return $index+1;
	}
}

$result = [];
$i = 0;
$count = 3;
while($i <= $count){
	$printResult[] = strangeArray(0, $i, $result);
	$i++;
}
echo '<pre>';
print_r($printResult);
echo '</pre>';
?>