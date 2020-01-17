<?php
//обновление данных в БД по первичному ключу PRIMARY KEY,  с помощью REPLACE
//работает, если нужно изменить пароль например

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

$conn = new mysqli($servername, $username, $password, $dbname);
//можно и массово, перечислив через запятую нужные столбцы
$sql = "REPLACE INTO users VALUES 
        (5, 'Alexandr', 'Ivanov', '123456789')";

if($conn->query($sql) === TRUE) {
    echo "Record update";
}
$conn->close();
?>
