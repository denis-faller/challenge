<?php

// Реализуйте треугольник Паскаля произвольного размера

function pascalTriangle($n)
{
  $c = array();
  $i = 0;
  $j = 0;
  for ($i = 1; $i <= $n; $i++){
    $c[$i] = 0;
  }
  $c[0] = 1;
  for ($j = 1; $j <= $n; $j++){
    for ($i = $j; $i >= 1; $i--){
      $c[$i] = $c[$i - 1] + $c[$i];
	}
  }
  for ($i = 0; $i <= $n; $i++){
    echo $c[$i]." ";
  }
  return $c;
}

pascalTriangle(3);

?>