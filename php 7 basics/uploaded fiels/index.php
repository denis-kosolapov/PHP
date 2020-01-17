<?php 
	if(isset($_FILES['image'])) { //глобальная переменная, хронит инфу загружаемого файла в виде массива
		$errors = array();
		$file_name = $_FILES['image']['name']; // имя файла
		$file_size = $_FILES['image']['size']; // размер файла
		$file_tmp = $_FILES['image']['tmp_name']; // временное место хранения файла
		$file_type = $_FILES['image']['type']; // тип файла
		$file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));

		$expensions = array("jpeg", "jpg", "png"); // запрос расширения файла

		if($file_size> 2097152) { // запрос размера файла
			$errors[] = 'Файл должен быть не более 2-х мегабайт!'; // вывод сообщения об ошибке, если больше
		}

		if(empty($errors) == true) { // если файл не больше 2 мб, то вывести Success
			move_uploaded_file($file_tmp, "images/".$file_name);
			echo "<h1>Файл успешно загружен</h1>";
		} else { // иначе 
			echo '<h1>не верный формат файла или слишком большой размер</h1>';//print $errors; // вывести ошибку
		}
	}
 ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data"> <!--форма для отправки файла-->
		<input type="file" name="image">
		<input type="submit">
		<ul>
			<li>Sent file: <?php  echo $_FILES['image']['name'];?> </li>
			<li>File size: <?php  echo $_FILES['image']['size'];?> </li>
			<li>File type: <?php  echo $_FILES['image']['type'];?> </li>
		</ul>
	</form>
</body>
</html>
