<?php
//добавление нескольких пользователей ООП

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO users(name, surname, password)
VALUES ('Alex1','Ivanov1','9999991');";
$sql .= "INSERT INTO users(name, surname, password)
VALUES ('Alex2','Ivanov2','9999992');";
$sql .= "INSERT INTO users(name, surname, password)
VALUES ('Alex3','Ivanov3','9999993')";

if($conn->multi_query($sql) === TRUE) {
    echo "record created";
}

$conn->close();
?>

