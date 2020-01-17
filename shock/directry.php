<?php  

$filename = '/' . $directry;

if (file_exists($filename)) {
	echo "Congratulations, files are successfully created";
	echo "<br><a href='http://shock.ru'>" . "Go home" . "</a>";
} else {
	echo "The file doesn't exist";
}

?>
