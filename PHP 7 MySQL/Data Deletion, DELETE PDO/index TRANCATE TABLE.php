<?php
//Полная очистка таблицы от всех записей с помощью TRUNCATE TABLE

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "TRUNCATE TABLE users";
if($conn->query($sql) === TRUE) {
    echo "TRUNCATE TABLE users";
}
$conn->close();
?>