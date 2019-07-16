<?
// Дата масленицы.

// Определите дату ближайшей масленицы (последнее воскресенье зимы). Если в этом году она уже была - покажите за следующий год.

function shrovetideDate($year){
	$mod1 = $year % 19;
	$mod2 = $year % 4;
	$mod3 = $year % 7;
	$temp1 = $mod1 * 19  + 15;
	$mod4 = $temp1 % 30;
	$temp2 = $mod2 * 2;
	$temp3 = $mod3 * 4;
	$temp4 = $mod4 * 6;
	$temp5 = $temp2 + $temp3 + $temp4  + 6;
	$mod5 = $temp5 % 7;
	$temp6 = $mod4 + $mod5;
	$result = 0;
	if($temp6 < 9){
		$result = $temp6 + 22;
		$month = "03";
	}
	else{
		$result = $temp6 - 9;
		$month = "04";
	}


	$date = date_create("$year-$month-$result");
	// Современный стиль
	date_modify($date, '13 days');
	// Масленица
	date_modify($date, '-55 days');
	return date_format($date, 'd.m.Y');;
}

echo shrovetideDate(2019);

?>