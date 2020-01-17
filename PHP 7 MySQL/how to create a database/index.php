<?php
//так же в трех вариантах: ооп, процедурный и PDO

//вариант ООП

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}

$sql = "CREATE DATABASE testDB1";

if ($conn->query($sql)===TRUE) {
    echo "Database created successfully 1 ";
} else {
    echo "Error " . $conn->error;
}

mysqli_close($conn);
?>

<?php
//процедурный подход

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " .mysql_connect_error());
}

$sql = "CREATE DATABASE testDB2";

if (mysqli_query($conn, $sql)) {
    echo "Database created successfully 2 ";
} else {
    echo "Error " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<?php
//PDO

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname", $username, $password);

    $sql = "CREATE DATABASE testDB3";
    $conn->exec($sql);
    echo "Database created successfully 3 ";
}

catch (PDOException $e) {
    echo $sql . $e->getMessage();
} // где $e это экземпляр класса
?>
