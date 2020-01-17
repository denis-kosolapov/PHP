<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		//перебор массива
		$name["Ivanov"] = " <h1>Alex</h1>"; 
		$name["Wilsher"] = " <h1>Jeff</h1>";
		$name["Spectr"] = " <h1>Harvey</h1>";

		echo $name["Spectr"];

		define('masiv' ,
		["ivanova" => ["name" => "Ivan", "born"=> "12-03-1990"]] );

		echo masiv["ivanova"]["name"];
	 ?>

	 <?php 
	 	$birth = [
	 		"Tomas" => "1980-11-18",
	 		"John" => "1992-04-28",
	 		"Mar" => "1980-12-13"
	 	];
	 	foreach ($birth as $key => $value) {
	 		echo "$key Родился $value <br />";
	 	}
	  ?>
</body>
</html>
