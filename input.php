<!DOCTYPE html>
<html>
<head>
	<title>Insert new Smart Phone</title>
	<link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars(dirname($_SERVER['REQUEST_URI'])."/inputcss.css");?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<h2>Get a new Smart Phone set</h2>
	<form method="POST" action="<?php echo htmlspecialchars(dirname($_SERVER['REQUEST_URI'])."/myphp2.php");?>">

		<div class = "main-class-attribute">
			<br>
			<br>
			<label class="attribute">Name: <input type="text" name="smart_phone_name" placeholder="Smart Phone Name" required></label>
			<label class="attribute">Year: <input type="text" name="year" placeholder="Release Year" required>  </label>
		</div>
	</form>
	
</body>
</html>