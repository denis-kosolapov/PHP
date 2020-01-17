<?php

//создаю сразу 10 текстовых документов, с разными именами!

if($_POST['ok']){

	if(empty($_POST['directry'])) exit("You haven't entered a directory name"); //проверяем щаполнено ли поле
	if(empty($_POST['filename'])) exit("You haven't entered a file name");
	if(empty($_POST['amount'])) exit("You haven't entered the number of copies");
	if(empty($_POST['extention'])) exit("You haven't entered extension of the file");
	if(empty($_POST['entertext'])) exit("You haven't entered the text of the file");
	
	$filename = $_POST['filename']; //при клике на кнопку "отправить" данные отправляются в переменную $filename
	$directry = $_POST['directry'];
	$entertext = $_POST['entertext'];
	$amount = $_POST['amount'];
	$extention = $_POST['extention'];
}

//$directry = "deckos";
//$filename = "document";
$filenumber = 0;
//$extention = 'txt';
//$entertext = "Всем привет, это текст нового файла, его можно создать прямо в программе и не париться";
//$amount = 10;
$amount = $amount - 1;

$structure = './' . $directry; // создаем файловую структуру

if(!@mkdir($directry, 0777, true) && ($_POST['ok'])) { // @ игнорирует вывод стандартной ошибки и выводит только пользовательскую
	die("It wasn't succeeded to create directories. Such directory already exists.");
} else {
	echo 'Please fill all fields';
}

while ($filenumber ++ <= $amount) { // циклом можно создать сразу множество файлов

	$file = $filename . '_' . $filenumber . '.' . $extention;

	if (!file_exists($file)) {
	    $fp = fopen('./' . $directry . '/' . $file, "w"); // ("r" - считывать "w" - создавать "a" - добовлять к тексту),мы создаем файл
	    //так же указываем в какой директории создать файлы
	    fwrite($fp, $entertext . "\r\n" ." копия_" . $filenumber);
	    fclose($fp);
	}
}

?>
