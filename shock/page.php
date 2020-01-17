<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Creation of files</title>
</head>
<body>
	<form method="post">
	<div>
		<label for="directry">Specify a directory</label>
		<input type="text" name="directry">
	</div>
	<br>
	<div>
		<label for="filename">Enter a file name</label>
		<input type="text" name="filename">
	</div>
	<br>
	<div>
		<label for="amount">Enter the number of copies of files</label>
		<input type="text" name="amount">
	</div>
	<br>
	<div>
		<label for="extention">Enter extension of the file</label>
		<input type="text" name="extention"> for example doc or txt
	</div>
	<br>
	<div>
		<p>Enter the text</p>
		<textarea name="entertext" rows="10" cols="100"></textarea>
	</div>
	<br>
	<div>
		<a href="directry.php"><input type="submit" name="ok" value="Enter" action="directry.php"></a>
	</div>
</form>

</body>
</html>
