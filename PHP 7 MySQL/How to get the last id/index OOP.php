<?php
//как вносить данные в таблицу объектно ориентированный подход
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO users (name, surname, password)
        VALUES ('John', 'Doe', '1021561')";

if($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "Last id " . $last_id;
}

$conn->close(); //закрывает соединение с БД
?>
