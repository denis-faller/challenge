<?php

// Сделайте свой аналог функции in_array

function inArray($searchWord, $arr){
	foreach($arr as $val){
		if(is_array($val)){
			if(inArray($searchWord, $val)){
				return true;
			}
		}
		elseif($searchWord == $val){
			return true;
		}
	}
	return false;
}

echo inArray("dos", array("linux", array("mac", "dos"), "windows"));
?>