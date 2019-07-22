<?

// Дана строка с текстом. В этом тексте есть цены в долларах - 'текст 10$ текст'. 
// Найдите все цены в этой и увеличьте их на 10%. Верните строку с увеличенными ценами.

$text = "текст 10$ текст. текст 30$ текст";

function markup10procent($str){
	$dollar = preg_quote("$");
	preg_match_all("/[0-9]+".$dollar."/", $str, $match);
	foreach($match[0] as $value){
		$temp = intval(str_replace("$", "", $value));
		$temp += $temp * 0.1;
		$str = str_replace($value, $temp."$", $str);
	}
	return $str;
}

echo markup10procent($text);

?>