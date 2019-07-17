<?
// Случайный цвет.

// Сделайте функцию, которая будет генерировать случайный цвет в hex формате (типа #ffffff).

function randomColor(){
	$colorArray =  '0123456789abcdef';

	$rand1 = rand(0, 15);
	$rand2 = rand(0, 15);
	$rand3 = rand(0, 15);
	$rand4 = rand(0, 15);
	$rand5 = rand(0, 15);
	$rand6 = rand(0, 15);

	return "#".$colorArray[$rand1].$colorArray[$rand2].$colorArray[$rand3].$colorArray[$rand4].$colorArray[$rand5].$colorArray[$rand6];
}

echo randomColor();
?>