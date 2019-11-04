<?php

// Дана папка с файлами и подпапками, в подпапках могут быть свои подпапки и файлы и так далее.
// Выведите на экран пути ко всем файлам, расположенных в этих папках.

$res = [];
function subfolders($dir){
	global $res;
	if ($dh = opendir($dir)) {
		while (($file = readdir($dh)) !== false) {
			if($file != "." && $file != ".."){
				if(is_dir($dir."\\".$file)){
					subfolders($dir."\\".$file);
				}
				else{
					$res[] = $dir."\\".$file;
				}
			}
		}
		closedir($dh);
	}
	return $res;
}

print_r(subfolders(__DIR__));

?>