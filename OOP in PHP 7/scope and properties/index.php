<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php //область видимости объектов класса

class Shop {
	Private $name; //закрывает доступ к переменной name, поэтому ее можноиспользовать только внутри класса 
	public function naming() { // public позволяет использовать объект во всех точках скрипта, он ставится по умолчанию, поэтому часто его не указывают
		$this -> name = "Adidas";
		echo $this->name;
	}
}

$product = new Shop; //вывод значения переменной класса, создание экземпляра класса
$product -> naming(); //выводится соответственно Adidas
//$product -> name "Nike"; // а вот Nike выводится не будет, так как у данного значения нет приватного доступа к переменной $product
?>
</body>
</html>
