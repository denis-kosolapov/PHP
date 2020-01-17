<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php //область видимости объектов класса

class User { // Public делает объект видимым и его можно использовать вне класса
	public $name = "Имя";
	public $password = "Пароль";
	public $email = "Емайл";
	public $city = "Город";
}
//обращаемся к свойствам

$admin = new User(); //создаем экземпляр класса
$user1 = new User(); 

$admin -> name = " Alexey"; // используем объекты вне класса, в данном случае это "name"
$user1 -> name = " Andrey"; //используем объекты вне класса

echo $admin -> name;
echo $user1 -> name;

// так же можно добавлять динамические свойства объекту

$user1 -> surname = " Ivanov"; // добавляем динамическое свойство оббъекту, свойство surname
echo $user1 -> surname; // добавли фамилию юзеру как свойство
?>
</body>
</html>