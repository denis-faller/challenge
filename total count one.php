<?

$array = range(1, 100);

function totalCountOne($arr){
	
	$quantity = 0;
	foreach($arr as $value){
		
		$number = strval($value);

		preg_match_all("/[1]/", $number, $matches);
	
		if(isset($matches[0][0])){
			$quantity += count($matches[0]);
		}	
	}
	return $quantity;
}

echo totalCountOne($array);
?>