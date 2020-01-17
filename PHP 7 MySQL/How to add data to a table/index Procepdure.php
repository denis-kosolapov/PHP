<?php
//добавление данных в таблицу процедурный подход

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "INSERT INTO users(name, surname, password)
        VALUES('Ivan', 'Ivanov', '123456')";

if(mysqli_query($conn, $sql)) {
    echo "Record created";
}

mysqli_close($conn);
?>