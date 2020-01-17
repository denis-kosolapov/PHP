<?php
//добавление нескольких пользователей ООП

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO users(name, surname, password)
VALUES ('Alex', 'Ivanov', '999999'),('Alex0', 'Ivanov0', '9999990')";

if($conn->query($sql) === TRUE) {
    echo "record created";
}

$conn->close();
?>

