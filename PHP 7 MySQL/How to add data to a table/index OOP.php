<?php
//как вносить данные в таблицу объектно ориентированный подход
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

$conn = new mysqli($servername, $username, $password, $dbname);
//комментировать sql запрос нельзя
$sql = "INSERT INTO users(name, surname, password)
       VALUES ('Ivan', 'Ivanov','54321')";

if($conn->query($sql) === TRUE) {
    echo "Record created";
}

$conn->close(); //закрывает соединение с БД
?>
