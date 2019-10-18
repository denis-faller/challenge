<?php

// Получите текущий или следующий месяц в формате 05.2016 (месяц.год). Что имеется ввиду: если сейчас май 2016 года, то функция должна вернуть 
// 05.2016, то же самое она должна вернуть, если сейчас дата до мая 2016 года. А вот если сейчас, к примеру, июнь 2016 года, то функция должна 
// вернуть следующий май, то есть 05.2017 - май 2017 года.

function monthAndYear($month){
	
	$date1 = "";
	$date2 = date("01-m-Y");
	if($month == "янв"){
		$date1 = date("01-01-Y");
	}
	elseif($month == "фев"){
		$date1 = date("01-02-Y");
	}
	elseif($month == "фев"){
		$date1 = date("01-02-Y");
	}
	elseif($month == "мар"){
		$date1 = date("01-03-Y");
	}
	elseif($month == "апр"){
		$date1 = date("01-04-Y");
	}
	elseif($month == "май"){
		$date1 = date("01-05-Y");
	}
	elseif($month == "июн"){
		$date1 = date("01-06-Y");
	}
	elseif($month == "июл"){
		$date1 = date("01-07-Y");
	}
	elseif($month == "авг"){
		$date1 = date("01-08-Y");
	}
	elseif($month == "сен"){
		$date1 = date("01-09-Y");
	}
	elseif($month == "окт"){
		$date1 = date("01-10-Y");
	}
	elseif($month == "ноя"){
		$date1 = date("01-11-Y");
	}
	elseif($month == "дек"){
		$date1 = date("01-12-Y");
	}
	
	$time1 = strtotime($date1);
	$time2 = strtotime($date2);
	
	if($time1 < $time2){
		return $date1;
	}
	else{
		$modDate = strtotime($date2."+ 1 years");
		return date("d-m-Y", $modDate);
	}
}

echo monthAndYear("дек");
?>