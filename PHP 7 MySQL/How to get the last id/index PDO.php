<?php
//как вносить данные в таблицу PDO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sql = "INSERT INTO users (name, surname, password)
        VALUES ('John', 'Doe', '1021561')";
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    echo "Last id " . $last_id;
}

catch (PDOException $e) {
    echo $sql . $e->getMessage();
}

$conn = null;

?>