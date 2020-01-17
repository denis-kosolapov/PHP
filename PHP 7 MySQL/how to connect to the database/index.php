<?php
//три подхода подключения к бд
//процедурный, объектно ориентированный и PDO

//объектно ориентированный подход
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die ("Connection field: " .$conn->connect_error);
}

echo "Connection successfully OOP, ";
?>

<?php
//процедурный подход
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die ("Connection field: " .mysqli_connect_error());
}

echo "Connection successfully procedural programming, ";
?>

<?php
//PDO
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername; dbname=veseliy-hakker", $username, $password);
    //пробеды ставить нельзя!!!
    echo "Connection successfully PDO ";
}

catch (PDOException $e) {
    echo "Connection failed: " .$e->getMessage();
}

?>
