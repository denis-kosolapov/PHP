<?php 
session_start();
include_once('functions.php');
?>
<center>
<form method="post">
  <input type="text" name="login">
  <input type="password" name="password">
  <input type="submit" name="ok" value="Войти">
</form>

<?php
if($_POST['ok']){
  $login = $_POST['login'];
  $password = $_POST['password'];
  login($login,$password);
}
?>
</center>
