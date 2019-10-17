<!DOCTYPE html>
<html class = "mobile_suggester">
<head>
	<script>
	function search() {
  	document.getElementById("mobile_suggester_form").submit();
	}
	function verify_and_search() {

  	var x =document.getElementsByName("lower_price_limit")[0].value;
  	var y =document.getElementsByName("higher_price_limit")[0].value;
  	if (parseInt(x) > parseInt(y)) {
  		document.getElementById("invalid_input").innerHTML = "Invalid input!";
  	} else {
  	document.getElementById("invalid_input").innerHTML = "";
  	document.getElementById("mobile_suggester_form").submit();
}
	}
	</script>
	<style>
		.error {color: #FF0000;}
	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="maincss.css">
</head>
<body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href=""><h2>Mobile Suggester</h2></a>
	  <h5>Unbox the best</h5>
	</nav>

	<?php
	// define variables and set to empty values
	$mobile_name_search = $order = "";
	$lower_bound = "100";
	$upper_bound = "200000";
	$battery = 1000;
	$ui = $os = $no_rear = $connect = $screen_size = [];
	$main_camera = $front_camera = 2;
	?>
	<div class ="main_filter">
		<form   id ="mobile_suggester_form" method="post" action="<?php echo htmlspecialchars(dirname($_SERVER['REQUEST_URI'])."/myphp1.php");?>"  target="suggester">

			<label name= "filter">
				<div name = "Search by name" >
					Search by name:<input type="text" onkeyup = "search()" name="mobile_name_search" placeholder="Mobile name" value="">
				</div><br>
			</label>
			<label name= "filter">
				<div name = "Price limit">
					Rs.<input type="text"  onkeyup = "verify_and_search()" name="lower_price_limit" value="<?php echo $lower_bound;?>">
					 - Rs.<input type="text" onkeyup = "verify_and_search()" name="higher_price_limit" value="<?php echo $upper_bound;?>">
					 <span class = "error" id= "invalid_input"></span><br>
				</div>
			</label>

			<div oninput="search()" >

			<label name= "filter">
			<label name = "filter_heading">Battery</label>
			<div name = "Battery">

				<label>
					<input type="radio" name="battery_input"  value = 1500>1500 mAh & above
				</label>
				<label>
					<input type="radio" name="battery_input"  value = 2000>2000 mAh & above
				</label>
				<label>
					<input type="radio" name="battery_input"  value = 2500>2500 mAh & above
				</label>
				<label>
					<input type="radio" name="battery_input"  value = 3000>3000 mAh & above
				</label>
				<label>
					<input type="radio" name="battery_input"  value = 3500>3500 mAh & above
				</label>
				<label>
					<input type="radio" name="battery_input"  value = 4000>4000 mAh & above
				</label>

<<<<<<< HEAD
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<div class="w3-sidebar w3-collapse" id="sidenav" style="top:44px; display: none;">
<div id="leftmenuinner" style="padding-top: 0px;">
<div class="w3-light-grey" id="leftmenuinnerinner">
<div class ="main_filter">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label>
			<div>
				<input type="reset" name="reset">
=======
>>>>>>> b310d3dfa7730ce1ecde0b3def06768addccbd68
			</div>
			</label>

			<label name= "filter">
			<label name = "filter_heading">Operating System</label>
			<div name = "OS">

				<label>
					<input type="checkbox" name="os_input[]" value = "android" >Android
				</label>
				<label>
					<input type="checkbox" name="os_input[]" value = "ios">IOS
				</label>

			</div>
			</label>

			<label name= "filter">
			<label name = "filter_heading">User Interface</label>
			<div name = "User Interface">

				<label>
				<input type="checkbox" name="ui_input[]" value = "oneui">Oneui
				</label>
				<label>
				<input type="checkbox" name="ui_input[]" value = "zui">Zui
				</label>
				<label>
				<input type="checkbox" name="ui_input[]" value = "oxygen">Oxygen
				</label>
				<label>
				<input type="checkbox" name="ui_input[]" value = "miui">Miui
				</label>
				<label>
				<input type="checkbox" name="ui_input[]" value = "samsung Experience">Samsung Experience
				</label>
				<label>
				<input type="checkbox" name="ui_input[]" value = "emui">Emui
				</label>
				<label>
				<input type="checkbox" name="ui_input[]" value = "stock">Stock
				</label>
				<label>
				<input type="checkbox" name="ui_input[]" value = "funtouch">Funtouch
				</label>
				<label>
				<input type="checkbox" name="ui_input[]" value = "color">Color
				</label>
				<label>
				<input type="checkbox" name="ui_input[]" value = "ios">IOS
				</label>

			</div>
			</label>

<<<<<<< HEAD
		</div>
		</label><br>

		<label name= "filter">
		<label name = "filter_heading">Connectivity & More</label><br>
		<div name = "Connectivity">
			<label>
			<input type="checkbox" name="conn_input[]" <?php if (in_array("Wifi", $connect)) echo "checked";?> value = "Wifi">Wifi
			</label><br>
			<label>
			<input type="checkbox" name="conn_input[]" <?php if (in_array("Bluetooth", $connect)) echo "checked";?> value = "Bluetooth">Bluetooth
			</label><br>
			<label>
			<input type="checkbox" name="conn_input[]" <?php if (in_array("NFC", $connect)) echo "checked";?> value = "NFC">NFC
			</label><br>
			<label>
			<input type="checkbox" name="conn_input[]" <?php if (in_array("Fingerprint_scanner", $connect)) echo "checked";?> value = "Fingerprint_scanner">Fingerprint Scanner
			</label><br>
			<label>
			<input type="checkbox" name="conn_input[]" <?php if (in_array("Face_unlock", $connect)) echo "checked";?> value = "Face_unlock">Face Unlock
			</label><br>
		</div>
		</label> <br>
		<label>
		<input type="submit" name="submit" value="Submit">
		</label>
		<select name="priority">
 			<option value="alpha">Price</option>
  			<option value="lower">lower to higher</option>
  			<option value="higher">higher to lower</option>
  			<option value="latest">latest</option>

		</select>
		<!-- <div class="dropdown">
  			<button class="dropbtn">Dropdown</button>
  			<div class="dropdown-content">
    			<a href="#">Link 1</a>
    			<a href="#">Link 2</a>
   			 <a href="#">Link 3</a>
 			 </div>
		</div> -->
	</form>
</div>
</div>
</div>
</div>
<?php
$servername = "localhost";
$username = "root";
$password = "9071243140";
$dbname = "mobile_suggester_db";
=======
			<label name= "filter">
			<label name = "filter_heading">Screen Size</label>
			<div name = "Screen Size">

				<input type="checkbox" name="screen_size_input[]" value = "4.5">4.5 inch - 5.0 inch
				</label>
				<label>
				<input type="checkbox" name="screen_size_input[]" value = "5.0">5.0 inch - 5.5 inch
				</label>
				<label>
				<input type="checkbox" name="screen_size_input[]" value = "5.5">5.5 inch - 6.0 inch
				</label>
				<label>
				<input type="checkbox" name="screen_size_input[]" value = "6.0">6.0 inch - 6.5 inch
				</label>
				<label>
				<input type="checkbox" name="screen_size_input[]" value = "6.5">6.5 inch & above
				</label>

			</div>
			</label>

			<label name= "filter">
			<label name = "filter_heading">Camera</label>
			<div name = "No. of Rear Cameras">

				<label>
				<label name = "filter_sub_heading">Number of Rear Cameras</label>
				<input type="checkbox" name="no_rear_input[]" value = "1">Single camera
				</label>
				<label>
				<input type="checkbox" name="no_rear_input[]" value = "2">Dual Camera
				</label>
				<label>
				<input type="checkbox" name="no_rear_input[]" value = "3">Triple Cameras
				</label>
				<label>
				<input type="checkbox" name="no_rear_input[]" value = "4">Quad Cameras
				</label>
				<label>
				<input type="checkbox" name="no_rear_input[]" value = "5">Penta Cameras
				</label>

			</div>
			<div name = "Main Camera">
				<label name = "filter_sub_heading">Main Camera Resolution</label>

				<label>
				<input type="radio" name="main_camera_input" value = "4">4 MP & above
				</label>
				<label>
				<input type="radio" name="main_camera_input" value = "8">8 MP & above
				</label>
				<label>
				<input type="radio" name="main_camera_input" value = "12">12 MP & above
				</label>
				<label>
				<input type="radio" name="main_camera_input" value = "16">16 MP & above
				</label>
				<label>
				<input type="radio" name="main_camera_input" value = "20">20 MP & above
				</label>
				<label>
				<input type="radio" name="main_camera_input" value = "48">48 MP
				</label>

			</div>
			<div name = "Front Camera">
				<label name = "filter_sub_heading">Front Camera Resolution</label>

				<label>
				<input type="radio" name="front_camera_input" value = "5">5 MP & above
				</label>
				<label>
				<input type="radio" name="front_camera_input" value = "8">8 MP & above
				</label>
				<label>
				<input type="radio" name="front_camera_input" value = "12">12 MP & above
				</label>
				<label>
				<input type="radio" name="front_camera_input" value = "16">16 MP & above
				</label>

			</div>
			</label>
>>>>>>> b310d3dfa7730ce1ecde0b3def06768addccbd68

			<label name= "filter">
			<label name = "filter_heading">Connectivity & More</label>
			<div name = "Connectivity">

				<label>
				<input type="checkbox" name="conn_input[]" value = "Wifi">Wifi
				</label>
				<label>
				<input type="checkbox" name="conn_input[]" value = "Bluetooth">Bluetooth
				</label>
				<label>
				<input type="checkbox" name="conn_input[]" value = "NFC">NFC
				</label>
				<label>
				<input type="checkbox" name="conn_input[]" value = "Fingerprint_scanner">Fingerprint Scanner
				</label>
				<label>
				<input type="checkbox" name="conn_input[]" value = "Face_unlock">Face Unlock
				</label>

			</div>
			</label>
			<select name="priority">
	 			<option value="alpha">a-z</option>
	  			<option value="lower">cost lower to higher</option>
	  			<option value="higher">cost higher to lower</option>
	  			<option value="latest">latest</option>

			</select>
		</div>
		</form>
	</div>

	<iframe name = "suggester" style="border:none;height:20000px;width:100%" src="<?php echo htmlspecialchars(dirname($_SERVER['REQUEST_URI'])."/myphp1.php");?>"></iframe>
</body>
</html>
