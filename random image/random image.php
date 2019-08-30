<?php

// В папке лежат файлы картинок. При заходе пользователя на сайт покажите ему случайную картинку из этой папки. 
// Если он обновит страницу или зайдет через некоторое - картинка, показываемая ему, не должна поменятся.

$files = scandir(__DIR__);

foreach($files as $file){
	$info = pathinfo($file);
	if($info["extension"] == "png" || $info["extension"] == "jpg" || $info["extension"] == "gif"){
		$filesResult[] = $file;
	}
}

$index = rand(0, count($filesResult)-1);

session_start();

if(!isset($_SESSION["img"])){
	$_SESSION["img"] = $filesResult[$index];
}

echo "<img src = '".$_SESSION["img"]."'/>";

?>