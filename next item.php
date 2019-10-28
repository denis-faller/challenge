<?php

// Дан ряд a, b, c ,d ... x, y, z , aa, ab, ac, ... ay, az, ba, bb, ... bz, ... aaz..
// Напишите функцию, которая получит следующий элемент по предыдущему.

function nextItem($prevStr){
	$length = strlen($prevStr);
	$i = 0;
	$str = "";
	$prevStr = str_split($prevStr);
	while($i < $length){
		if($i == ($length-1)){
			if($prevStr[$i] == "z" && ($length>1)){
				$j = 0;
				$z = 0;
				while($j < $length){
					if(isset($prevStr[$i-$j])){
						if($prevStr[$i-$j] == "z"){
							$str[$i-$j] = "a";
							$z++;
						}
					}
					$j++;
				}
				
				if($z != $length){
					$str[$i-$z] = ++$prevStr[$i-$z];
				}
				else{
					$str .= "a";
				}
			}
			else{
				$str .= ++$prevStr[$i];
			}
		}
		else{
			$str .= $prevStr[$i];
		}
		$i++;
	}
	return $str;
}

echo nextItem('abc');

?>