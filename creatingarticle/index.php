<?php 
//подключаем сессии
session_start();
//подключаем функции
include_once('functions.php'); 
?>


<!DOCTYPE html>
<html>
<head>
  <title>Мой маленький сайт</title>
</head>
<body>
<h1>Мой маленький сайт</h1>

<!-- Выводим данные с файла -->
<p><?php echo file_get_contents('bd.txt'); ?></p>

<!-- Проверяем сессию -->
<?php 
if($_SESSION['login'] == 'OK'){
  echo '<a href="/admin.php">Редактировать</a> | <a href="/admin.php?logout">Выйти</a>';
}else{
  echo '<a href="/login.php">Войти</a>';
}
 ?>

</body>
</html>
