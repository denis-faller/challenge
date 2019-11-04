<?php

// Даны два числа. Проверьте что он эти числа состоят и одинакового набора цифр. 
// Иначе говоря, проверьте то, что перестановкой цифр одного числа можно получить другое число.

function swap(&$a, $i, $j){
	$temp = $a[$i];
	$a[$i] = $a[$j];
	$a[$j] = $temp;
}

function nextSet(&$a, $n)
{
  $j = $n - 2;
  while ($j != -1 && $a[$j] >= $a[$j + 1]) {
	  $j--;
  }
  
  if ($j == -1){
    return false;
  }
  
  $k = $n - 1;
  while ($a[$j] >= $a[$k]){
	  $k--;
  }
  
  swap($a, $j, $k);
  
  $l = $j + 1;
  $r = $n - 1;
  while ($l < $r){
    swap($a, $l++, $r--);
  }
  return true;
}

function checkDigitSwap(&$a, $checkNumber){
	$number = implode($a);
	if($number == $checkNumber){
		return true;
	}
}

$n = 4;
for ($i = 0; $i < $n; $i++){
    $a[$i] = $i + 1;
}

while(nextSet($a, $n)){
    if(checkDigitSwap($a, "1324")){
		echo implode($a);
	}
}
?>