<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
</head>
<body>
	<h1>Hello World!</h1>
	<p>This is my first PHP</p>
	<form action="process.php" method="post">
		<input name="name" type="text" placeholder="input name">
		<input type="submit">
	</form>	
	
	<?php
	
		$name = "name";
		echo $name;
	
	?>
</body>
</html>