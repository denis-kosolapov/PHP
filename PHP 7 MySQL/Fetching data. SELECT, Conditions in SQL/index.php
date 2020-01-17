<?php
//добавление нескольких пользователей PDO

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

$conn = new mysqli($servername, $username, $password, $dbname);
//можно сделать выборку, перечислив столбцы
//если указать только SELECT, то автоматически будут выбраны все столбцы
//$sql = "SELECT*FROM users "; запрос SQL, который выбирает все столбцы
$sql = "SELECT*FROM users ";
$result = $conn->query($sql); //обработка запроса и помещение результатов в переменную $result
if($result->num_rows > 0) { //num_rows проверяет и выводит число рядов результирующей выборки
    //если
    while ($row = $result->fetch_assoc()) { //если результатов больше чем 0, функция fetch_assoc помещает результаты
        //в ассоциативный массив, который мы можем перебрать через цикл while
        echo "<br> id:". $row["user_id"] . "<br> name:". $row["name"] . "<br> surname:". $row["surname"];
        //цикл перебирает результирующий набор и вводит данные из запроса, т.е. $row содержит ассоциативный массив
    }
}
$conn->close();
?>

