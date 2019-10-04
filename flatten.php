<?php
// Реализуйте функцию flatten, которая в случае, если массив обладает уровнями вложенности, приведёт его к элементарному виду

$resArray = array();
function flatten($arr){
	global $resArray;
	foreach($arr as $val){
		if(is_array($val)){
			flatten($val);
		}
		else{
			$resArray[] = $val;
		}
	}
	return $resArray;
}
$array = array(1, array(2,3), array(array(4,5,6)));

print_r(flatten($array));

?>