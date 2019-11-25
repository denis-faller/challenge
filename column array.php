<?php

// Дан многомерный массив. Уровни вложенности его подмассивов могут быть разными.
// Выведите на экран столбец всех его элементов.

function columnArray($arr){
	foreach($arr as $value){
		if(is_array($value)){
			columnArray($value);
		}
		else{
			echo $value."<br>";
		}		
	}
}

columnArray(array(1, 2, 3, array(4, 5, array(6, 7), 8), 9));

?>