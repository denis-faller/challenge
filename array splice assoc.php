<?php

// Функция array_splice не работает с ассоциативными массивами. 
// Реализуйте свою функцию array_splice_assoc, которая будет делать это.
function array_splice_assoc($targetArr, $toBeEmbed, $indAfter) {
    $index = array_search($indAfter, array_keys($targetArr));
    $offset = $index + 1;

    $newArray = array_slice($targetArr, 0, $offset, true) +
    $toBeEmbed +
    array_slice($targetArr, $offset, NULL, true); 

    return $newArray;
}


$features = array(
            "color" => "red",
            "taste" => "sweet",
            "season" => "summer"
          );

$toBeEmbed = array("texture" => "bumpy");

$newArray = array_splice_assoc($features, $toBeEmbed, 'taste');

print_r($newArray);

?>