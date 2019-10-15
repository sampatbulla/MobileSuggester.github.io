<!DOCTYPE html>
<html class = "mobile_suggester">
<head>
	<style>
		.error {color: #FF0000;} 
	</style>
	<title>Mobile Suggester : Find the Phone that suits your needs</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="main.css">
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $mobile_name_search = test_input($_POST["mobile_name_search"]);
  $lower_bound = test_input($_POST["lower_price_limit"]);
  $upper_bound = test_input($_POST["higher_price_limit"]);
  if(!empty($_POST["battery_input"]))$battery = test_input($_POST["battery_input"]);
  if(!empty($_POST["os_input"])) $os = $_POST["os_input"];
  if(!empty($_POST["ui_input"])) $ui = $_POST["ui_input"];
  if(!empty($_POST["no_rear_input"])) $no_rear = $_POST["no_rear_input"];
  if(!empty($_POST["main_camera_input"])) $main_camera = $_POST["main_camera_input"];
  if(!empty($_POST["front_camera_input"])) $front_camera = $_POST["front_camera_input"];
  if(!empty($_POST["conn_input"])) $connect = $_POST["conn_input"];
  if(!empty($_POST["screen_size_input"])) $screen_size = $_POST["screen_size_input"];
  if(!empty($_POST["priority"])) $order = $_POST["priority"];


 // $os = test_input($_POST["os_input"]);
//  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	
?>
<div class ="main_filter">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label>
			<div>
				<input type="reset" name="reset">
			</div>
		</label><br>
		
		<label name= "filter">		
		<div name = "Search by name">Search by name:<input type="text" name="mobile_name_search" placeholder="Mobile name" value="<?php echo $mobile_name_search;?>"></div>
		</label><br>
		<label name= "filter">
		<div name = "Price limit">
			Rs.<input type="text"  name="lower_price_limit" value="<?php echo $lower_bound;?>">
			 - Rs.<input type="text" name="higher_price_limit" value="<?php echo $upper_bound;?>">
		</div>
		</label><br>
		
		
		
		<label name= "filter">		
		<label name = "filter_heading">Battery</label>
		<div name = "Battery">
			<label>
				<input type="radio" name="battery_input" <?php if ($battery==1500) echo "checked";?> value = 1500>1500 mAh & above 
			</label><br>
			<label>
				<input type="radio" name="battery_input" <?php if ($battery==2000) echo "checked";?> value = 2000>2000 mAh & above 
			</label><br>

			<label>
				<input type="radio" name="battery_input" <?php if ($battery==2500) echo "checked";?> value = 2500>2500 mAh & above 
			</label><br>
			<label>
			<input type="radio" name="battery_input"  <?php if ($battery==3000) echo "checked";?> value = 3000>3000 mAh & above 
			</label><br>
			<label> 
			<input type="radio" name="battery_input"  <?php if ($battery==3500) echo "checked";?> value = 3500>3500 mAh & above 
			</label><br>
			<label> 
			<input type="radio" name="battery_input"  <?php if ($battery==4000) echo "checked";?> value = 4000>4000 mAh & above  
			</label><br>

		</div>
		</label><br>
		
		<label name= "filter">		
		<label name = "filter_heading">Operating System</label>
		<div name = "OS"> 
			
			<label>
			<input type="checkbox" name="os_input[]" <?php if (in_array("android", $os)) echo "checked";?> value = "android">Android 
			</label><br>
			<label>
			<input type="checkbox" name="os_input[]" <?php if (in_array("ios", $os)) echo "checked";?> value = "ios">IOS 
			</label><br>
			
		</div>
		</label><br>
		
		<label name= "filter">
		<label name = "filter_heading">User Interface</label>
		<div name = "User Interface"> 
			
			<label>
			<input type="checkbox" name="ui_input[]" <?php if (in_array("oneui", $ui)) echo "checked";?>
			value = "oneui">Oneui  
			</label><br>
			<label>
			<input type="checkbox" name="ui_input[]" <?php if (in_array("zui", $ui)) echo "checked";?>
			value = "zui">Zui  
			</label><br>
			<label>
			<input type="checkbox" name="ui_input[]" <?php if (in_array("oxygen", $ui)) echo "checked";?>
			value = "oxygen">Oxygen  
			</label><br>
			<label>
			<input type="checkbox" name="ui_input[]" <?php if (in_array("miui", $ui)) echo "checked";?>
			value = "miui">Miui 
			</label><br>
			<label>
			<input type="checkbox" name="ui_input[]" <?php if (in_array("samsung Experience", $ui)) echo "checked";?>
			value = "samsung Experience">Samsung Experience  
			</label><br>
			
			<label>
			<input type="checkbox" name="ui_input[]" <?php if (in_array("emui", $ui)) echo "checked";?> value = "emui">Emui 
			</label><br>
			<label>
			<input type="checkbox" name="ui_input[]" <?php if (in_array("stock", $ui)) echo "checked";?> value = "stock">Stock  
			</label><br>
			<label>
			<input type="checkbox" name="ui_input[]" <?php if (in_array("funtouch", $ui)) echo "checked";?> value = "funtouch">Funtouch 
			</label><br>
			<label>
			<input type="checkbox" name="ui_input[]" <?php if (in_array("color", $ui)) echo "checked";?> value = "color">Color 
			</label><br>
			<label>
			<input type="checkbox" name="ui_input[]" <?php if (in_array("ios", $ui)) echo "checked";?> value = "ios">iOS 
			</label><br>
			
		</div>
		</label><br>
		
		<label name= "filter">
		<label name = "filter_heading">Screen Size</label>
		<div name = "Screen Size"> 
			
			<label>
			<input type="checkbox" name="screen_size_input[]" <?php if (in_array("4.0", $screen_size)) echo "checked";?> value = "4.0">4.0 inch - 4.5 inch 
			</label><br>
			<label> 
			<input type="checkbox" name="screen_size_input[]" <?php if (in_array("4.5", $screen_size)) echo "checked";?> value = "4.5">4.5 inch - 5.0 inch 
			</label><br>
			<label>
			<input type="checkbox" name="screen_size_input[]" <?php if (in_array("5.0", $screen_size)) echo "checked";?> value = "5.0">5.0 inch - 5.5 inch 
			</label><br>
			<label>
			<input type="checkbox" name="screen_size_input[]" <?php if (in_array("5.5", $screen_size)) echo "checked";?> value = "5.5">5.5 inch - 6.0 inch 
			</label><br>
			<label>
			<input type="checkbox" name="screen_size_input[]" <?php if (in_array("6.0", $screen_size)) echo "checked";?> value = "6.0">6.0 inch - 6.5 inch 
			</label><br>
			<label>
			<input type="checkbox" name="screen_size_input[]" <?php if (in_array("6.5", $screen_size)) echo "checked";?> value = "6.5">6.5 inch & above 
			</label><br>
			
		</div>
		</label><br>

		<label name= "filter">
		<label name = "filter_heading">Camera</label>
		<div name = "No. of Rear Cameras"> 
			
			<label>
			<label name = "filter_sub_heading">Number of Rear Cameras</label><br>
			<input type="checkbox" name="no_rear_input[]" <?php if (in_array("1", $no_rear)) echo "checked";?> value = "1">Single camera 
			</label><br>
			<label>
			<input type="checkbox" name="no_rear_input[]" <?php if (in_array("2", $no_rear)) echo "checked";?> value = "2">Dual Camera 
			</label><br>
			<label>
			<input type="checkbox" name="no_rear_input[]" <?php if (in_array("3", $no_rear)) echo "checked";?> value = "3">Triple Cameras 
			</label>
			<label>
			<input type="checkbox" name="no_rear_input[]" <?php if (in_array("4", $no_rear)) echo "checked";?> value = "4">Quad Cameras 
			</label><br>
			<label>
			<input type="checkbox" name="no_rear_input[]" <?php if (in_array("5", $no_rear)) echo "checked";?> value = "5">Penta Cameras 
			</label><br>
			
		</div>
		<div name = "Main Camera">
			<label name = "filter_sub_heading">Main Camera Resolution</label> <br>
			
			<label>
			<input type="radio" name="main_camera_input" <?php if ($main_camera == "4") echo "checked";?> value = "4">4 MP & above  
			</label><br>
			<label>
			<input type="radio" name="main_camera_input" <?php if ($main_camera == "8") echo "checked";?> value = "8">8 MP & above  
			</label>
			<label><br>
			<input type="radio" name="main_camera_input" <?php if ($main_camera == "12") echo "checked";?> value = "12">12 MP & above  
			</label><br>
			<label>
			<input type="radio" name="main_camera_input" <?php if ($main_camera == "16") echo "checked";?> value = "16">16 MP & above 
			</label><br>
			<label>
			<input type="radio" name="main_camera_input" <?php if ($main_camera == "20") echo "checked";?> value = "20">20 MP & above 
			</label><br>
			<label>
			<input type="radio" name="main_camera_input" <?php if ($main_camera == "48") echo "checked";?> value = "48">48 MP 
			</label><br>
			
		</div>
		<div name = "Front Camera">
			<label name = "filter_sub_heading">Front Camera Resolution</label> <br>
	
			<label>
			<input type="radio" name="front_camera_input" <?php if ($front_camera == "5") echo "checked";?> value = "5">5 MP & above 
			</label><br>
			<label>
			<input type="radio" name="front_camera_input" <?php if ($front_camera == "8") echo "checked";?> value = "8">8 MP & above 
			</label><br>
			<label>
			<input type="radio" name="front_camera_input" <?php if ($front_camera == "12") echo "checked";?> value = "12">12 MP & above 
			</label><br>
			<label>
			<input type="radio" name="front_camera_input" <?php if ($front_camera == "16") echo "checked";?> value = "16">16 MP & above 
			</label><br>
			
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

<?php
$servername = "localhost";
$username = "root";
$password = "9071243140";
$dbname = "mobile_suggester_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if($ui != [])
	{
		$uiquery = " AND Ui IN (";
		foreach ($ui as $value) {
		# code...
			$uiquery = $uiquery." '".$value."',";
		} 
		$uiquery = substr($uiquery,0,-1).")";
	}
	else{
		$uiquery = "";
	}
if($os != [])
	{
		$osquery = " AND Os IN (";
		foreach ($os as $value) {
		# code...
			$osquery = $osquery." '".$value."',";
		} 
		$osquery = substr($osquery,0,-1).")";
	}
	else{
		$osquery = "";
	}
	if($no_rear != [])
	{
		$no_rear_query = " AND No_of_cameras IN (";
		foreach ($no_rear as $value) {
		# code...
			$no_rear_query = $no_rear_query." '".$value."',";
		} 
		$no_rear_query = substr($no_rear_query,0,-1).")";
	}
	else{
		$no_rear_query = "";
	}
	$conn_input_query = "";
	if($connect != [])
	{
		foreach ($connect as $value) {
		# code...
			$conn_input_query = $conn_input_query." AND ".$value." = 1 ";
		} 
		
	}
	$screen_size_query = "";
	if($screen_size != [])
	{
		$screen_size_query = " AND (";
		foreach ($screen_size as $value) {
		# code...
			$screen_size_query = $screen_size_query."Size BETWEEN ".$value." AND ".($value+0.5)." OR ";
		}
		$screen_size_query = substr($screen_size_query,0,-3).") "; 
		
	}
	switch ($order) {
		case 'lower':
			# code...
			$order_query = " ORDER BY SM.Price";
			break;
		case 'higher':
			# code...
			$order_query = " ORDER BY SM.Price DESC";
			break;
		case 'latest':
			# code...
			$order_query = " ORDER BY SM.Release_year DESC";
			break;
		default:
			# code...
		$order_query = " ORDER BY SM.Smartphone_name";
			break;
	}
	
$sql = "SELECT SM.S_id,Smartphone_name as 'Smartphone Name' ,Ram, Storage, Release_year AS 'Year', Battery, Ui AS UI, Os as OS, P_name as 'Proc Name' , P_brand as 'Proc Brand', Size AS 'Disp Size', Type_of_Display as 'Type of Display', Wifi, Bluetooth as BT, NFC, Fingerprint_scanner as FPS, Face_unlock, No_of_cameras as 'No of Cameras', Rear_primary_camera as Rear, Front_camera as Front, Price, Wifi,Bluetooth,NFC,Fingerprint_scanner FPS,Face_unlock FU from SMARTPHONE SM, PROCESSORS PR, SOFTWARE SO, DISPLAY DI, CONNECTIVITY CO, CAMERA CA WHERE SM.Soft_id = SO.Soft_id AND SM.Processor_id = PR.Processors_id and SM.Disp_id = DI.Disp_id and SM.Cn_id = CO.Cn_id and SM.S_id = CA.S_id"
	." AND SM.Smartphone_name LIKE '%".$mobile_name_search."%'" 
	." AND (SM.Price BETWEEN ".$lower_bound." AND ".$upper_bound.")"
	."  AND SM.Battery >=".$battery
	.$osquery.$uiquery.$no_rear_query
	." AND Rear_primary_camera >= ".$main_camera 
	." AND Front_camera >= ".$front_camera
	.$conn_input_query.$screen_size_query
	.$order_query
	;
function check($param) {
  if($param == 1){
  return "Yes";
  } else {
  	return "No";
  }
}
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
	echo $result->num_rows." results found.";
    while($row = $result->fetch_assoc()) {
        echo 
        "<p>".
        "<img src='image/".$row["S_id"]."'><br>".
        "Name: " . $row["Smartphone Name"]."<br>".
        "Release_year: ".$row["Year"]."<br>".
        "RAM: ".$row["Ram"]."<br>".
        "Internal Memory: ".$row["Storage"]."<br>".
        "Battery: ".$row["Battery"]."<br>".
        "UI: ".$row["UI"]."<br>".
        "OS: ".$row["OS"]."<br>".
        "Proc Name: ".$row["Proc Name"]."<br>".
        "Proc Brand: ".$row["Proc Brand"]."<br>".
        "Disp Size: ".$row["Disp Size"]."<br>".
        "Type of Display: ".$row["Type of Display"]."<br>".
        "No of Cameras: ".$row["No of Cameras"]."<br>".
        "Rear: ".$row["Rear"]."<br>".
        "Front: ".$row["Front"]."<br>".
        "Price: ".$row["Price"]."<br>".
        "Wifi: ".check($row["Wifi"])."  &nbsp&nbsp".//&nbsp adds extra space in html
        "Bluetooth: ".check($row["Bluetooth"])." &nbsp&nbsp".
        "NFC: ".check($row["NFC"])." &nbsp&nbsp".
        "Fingerprint Scanner: ".check($row["FPS"])." &nbsp&nbsp".
        "Face Unlock: ".check($row["FU"])."<br>".
        "</p><hr>";
    }
} else {
    echo "No results found!";
}
$conn->close();
?>

</body>
</html>
