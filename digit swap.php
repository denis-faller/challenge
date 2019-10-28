<?php

// Дано число. Выведите на экран все возможные перестановки его цифр.

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

function printSet(&$a, $n){
	for ($i = 0; $i < $n; $i++){
		echo $a[$i]." ";
	}
	echo "<br>";
}

$n = 4;
for ($i = 0; $i < $n; $i++){
    $a[$i] = $i + 1;
}

printSet($a, $n);

while(nextSet($a, $n)){
    printSet($a, $n);
}
?>