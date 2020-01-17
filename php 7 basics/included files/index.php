<?php 
require "header.php"; //используется для разделения страницы на части

function mySqr($n) {
	return $n * $n;
}

//$value = mySqr(5);
//echo $value;

echo mySqr(12);

require "footer.php";
# require_once // следит за единоразовым подключением файла в скрипте
 ?>

 <?php 
 function funcCount() {
 	static $count = 0; //если убрать static, то выведутся единицы
 	$count++;
 	echo $count;
 }

 for ($i=0; $i < 5; $i++) { 
 	funcCount();
 }
  ?>
