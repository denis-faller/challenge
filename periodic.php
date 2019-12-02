<?php

// Реализуйте функцию, которая будет принимать два числа, а возвращать результат деления одного на второе. 
// При этом, если получается периодичская дробь, то ответ следует вывести примерно в таком виде: 1.(428571).

function isBalance($balanceArr, $bal, $len)
{
	for($i=1;$i<$len-1;$i++)
	{
		if($balanceArr[$i] == $bal)
			return $i;
	}
	
	return 0;
}


function periodic($num1, $num2){
	
	$r = 0;
	$i = 1;
	$balance = [];
	$period = [];
	do{
		$r = $num1%$num2;
		$balance[$i] = $r;
		
		$num1 = $num1/$num2;
		$period[$i] = $num1;
		
		$num1 = 10*$r;
		$i++;		
	}
	while(($pos = isBalance($balance, $r, $i)) == 0);
	
	echo "Дробь: ";
	
	echo intval($period[1]).",";
	
	for($r = 2;$r < $i; $r++){
		echo intval($period[$r]);
	}
	
	echo '<br>';
	
	echo "Период: ";
	
	for($r = $pos + 1;$r < $i; $r++){
		echo intval($period[$r]);
	}
}



periodic(10, 7);

?>