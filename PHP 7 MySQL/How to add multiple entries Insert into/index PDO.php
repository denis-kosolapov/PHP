<?php
//добавление нескольких пользователей PDO

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->beginTransaction(); //начать транзакцию в БД и завершить режим автоматической фиксации, иначе экземпляры PDO
    //не применятся
    $conn->exec($sql = "INSERT INTO users(name, surname, password)
    VALUES ('Alex1','Ivanov1','9999991');");
    $conn->exec($sql = "INSERT INTO users(name, surname, password)
    VALUES ('Alex1','Ivanov1','9999991');");
    $conn->exec($sql = "INSERT INTO users(name, surname, password)
    VALUES ('Alex1','Ivanov1','9999991');");

    $conn->commit(); //завершает транзакцию
    echo "Record created";
}

catch (PDOException $e) {
    $conn->rollBack(); //откатит все изменения в БД и вернет соединение к режиму автоматической фиксации
}
?>

