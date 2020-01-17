<?php
//обновление данных в БД
//усли не будет указания для какого столбца WHERE name='Alex' меняются данные, то замена произойдет во всех

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "UPDATE users SET name='Alexandr' WHERE name='Alex'";

if($conn->query($sql) === TRUE) {
    echo "Record update";
}
$conn->close();
?>