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

<!-- Name: APPLE 11
Release_year: 2019
RAM: 6
Internal Memory: 512
Battery: 2800
UI: Ios
OS: Ios
Proc Name: a13
Proc Brand: Apple
Disp Size: 6.0
Type of Display: AMOLED
No of Cameras: 2
Rear: 12
Front: 8
Price: 64000
Wifi: Yes   Bluetooth: Yes   NFC: Yes   Fingerprint Scanner: No   Face Unlock: Yes -->

		<div class = "main-class-attribute">
			<br>
			<br>
			<label class="attribute">Name: <input type="text" name="Name" placeholder="Smart Phone Name" required>  </label>
			<label class="attribute2">Year: <input type="text" name="Release_year" placeholder="Release Year" required>  </label><br>
			<label class="attribute">RAM: <input type="text" name="RAM" placeholder="in GBs" required>  </label>
			<label class="attribute2">Internal Memory: <input type="text" name="Internal Memory" placeholder="in GBs" required>  </label><br>
			<label class="attribute">Battery: <input type="text" name="Battery" placeholder="in mAh" required>  </label>
			<label class="attribute2">Disp Size: <input type="text" name="Disp Size" placeholder="in inches" required>  </label><br>
			<label class="attribute2">UI: <input type="text" name="UI" placeholder="" required>  </label>
			<label class="attribute">OS: <input type="text" name="OS" placeholder="" required>  </label><br>
			<label class="attribute2">Processor Name: <input type="text" name="Proc Name" placeholder="" required>  </label>
			<label class="attribute">Processor Brand: <input type="text" name="Proc Brand" placeholder="" required>  </label><br>
			<label class="attribute">Type of Display: <input type="text" name="Type of Display" placeholder="" required>  </label>
			<label class="attribute2">No of Cameras: <input type="text" name="No of Cameras" placeholder="" required>  </label><br>
			<label class="attribute">Rear Camera Resolution: <input type="text" name="Rear" placeholder="in Megapixels" required>  </label>
			<label class="attribute2">Front Camera Resolution: <input type="text" name="Front" placeholder="in Megapixels" required>  </label><br>
			<label class="attribute">Price: <input type="text" name="Price" placeholder="in Rs." required>  </label>
			<br>
			<input type="file" name="pic" accept="image/*">
		</div>
			<div><input type="submit" name="submit"></div>
	</form>
	
</body>
</html>