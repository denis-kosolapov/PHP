<?php
//как вносить данные в таблицу процедурный подход
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO users (name, surname, password)
        VALUES ('John', 'Doe', '1021561')";

if(mysqli_query($conn, $sql)){
    $last_id = mysqli_insert_id($conn);
    echo "Last id " . $last_id;
}

$conn->close(); //закрывает соединение с БД
?>