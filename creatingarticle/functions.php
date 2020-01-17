<?php 
//-------------------------------------------------------
//функция отображающая данные из bd.txt
//-------------------------------------------------------
function view(){
  $file = fopen('bd.txt','r');
  if($file){
    while(!feof($file)){
      $read = fgets($file);
      return $read;
    }
  }
  	fclose($file);
}


//--------------------------------------------------------
//функция редактирующая данные в bd.txt
//--------------------------------------------------------
function update(){
  echo "<h2>Форма редактирования данных</h2>";
  $file = view();
  echo '
  <form method="post">
  <textarea name="text" rows="25" cols="100" placeholder="Текст файла">'.$file.'</textarea><br>
  	<input type="submit" name="update" value="Сохранить">
  </form>
  ';

  if($_POST['update']){
    $text = $_POST['text'];
      	$file = fopen('bd.txt', 'w');
      	//Записываем строку в файл
      	$write = fwrite($file, $text);
    	fclose($file);
    	echo "<br>Данные успешно сохранены. <a href='/'>Посмотреть</a>";
  	}
}

//--------------------------------------------------------
//функция входа
//--------------------------------------------------------
function login($login,$password){
  $config = parse_ini_file('config.ini', true);
  $alogin = $config['login'];
  $apass = $config['password'];
  if($alogin == $login && $apass == $password){
    $_SESSION['login'] = 'OK';
    echo "Вы авторизованы! Перейти в <a href='/admin.php'>Админку</a>";
  }else{
    echo "Логин или пароль не верные.";
  }
}
 ?>
