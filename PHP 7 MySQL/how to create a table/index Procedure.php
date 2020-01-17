<?php
//создание таблицы процедурный подход
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE users2 (
        name VARCHAR (30) NOT NULL,
        surname VARCHAR (30) NOT NULL PRIMARY KEY,
        password VARCHAR (30) NOT NULL)";

if(mysqli_query($conn, $sql)) {
    echo "Table users2 created successfully";
} else {
    echo "Error" . mysqli_error($conn);
}

$conn->close(); //закрывает соединение с БД
?>