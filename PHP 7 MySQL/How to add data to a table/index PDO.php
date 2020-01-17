<?php
//добавление данных в таблицу PDO

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sql = "INSERT INTO users (name, surname, password)
            VALUES('IvanV', 'IvanovV', '123456789')";
    $conn->exec($sql);
    echo "Record created PDO";
}

catch (PDOException $e) {
    echo $sql . $e->getMessage();
}
$conn = null;
?>