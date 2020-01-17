<?php 
session_start();
include_once('functions.php');

if($_SESSION['login'] == 'OK'){

  if(isset($_GET['logout'])){
    unset($_SESSION['login']);
    echo '<br><a href="/">На главную</a> | <a href="/login.php">Войти</a>';
  }
  else{
    update();
    echo '<br><a href="/">На главную</a> | <a href="/admin.php?logout">Выйти</a>';
  }
  
}else{
  echo "Вы НЕ авторизованы! <a href='/login.php'>Войти</a>.";
}

?>
