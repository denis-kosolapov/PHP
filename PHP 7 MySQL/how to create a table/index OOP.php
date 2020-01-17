<?php
//создание таблицы объекто ориентированный подход
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE users (
        name VARCHAR (30) NOT NULL,
        surname VARCHAR (30) NOT NULL PRIMARY KEY,
        password VARCHAR (30) NOT NULL)";

if ($conn->query($sql) === TRUE) {
    echo "Table users created successfully";
} else {
    echo "Error" . $conn->error;
}

$conn->close(); //закрывает соединение с БД
?>
