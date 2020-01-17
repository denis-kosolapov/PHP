<?php
//Форма отправки сообщения PDO

$servername = "localhost";
$username = "root";
$password = "";
try {
    $conn = new PDO("mysql:host=$servername; dbname=testDB", $username, $password);
    if(empty($_POST['name'])) exit("Поле не заполнено"); // empty возвращает true/false если строка пустая или содержит символ
    if(empty($_POST['content'])) exit("Поле не заполнено");

    $query ="INSERT INTO massage VALUES (NULL , :name,NOW() )"; //возвращает текущую дату и время
    $msg = $conn->prepare($query);//prepare отправлят запрос в БД и возвращает ассоциированный с этим запросом объект
    $msg -> execute(['name' => $_POST['name']]); // получаем данные из массива name методом POST со значением name

    $msg_id = $conn->lastInsertId(); //получаем последний идентификатор

    $query = "INSERT INTO massage_content VALUES (NULL , :content, :massage_id)";
    $msg = $conn->prepare($query);
    $msg->execute(['content' => $_POST['content'], 'massage_id' => $msg_id]);

    header("location: index.html"); //перенаправление на страницу после нажатия на "Отправить"
}

catch (PDOException $e) {
    echo "error" .$e->getMessage();
}

?>
