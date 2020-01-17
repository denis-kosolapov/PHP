<?php
//Удаление данных, так же как и замена
//если не будет указания, что именно удалить WHERE name='Alex', то удалится все!!!

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

$conn = new mysqli($servername, $username, $password, $dbname);
//можно и массово, перечислив через запятую нужные строки

$sql = "DELETE FROM users WHERE name='Alex1'";

//Оператор LIMIT огрничивает количество удаляемых строк
$sql = "DELETE FROM users LIMIT 2";
if($conn->query($sql) === TRUE) {
    echo "Delete update and delete limit 2";
}
$conn->close();
?>
