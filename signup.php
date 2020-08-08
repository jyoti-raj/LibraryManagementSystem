<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="csss.css"> 
		<title>Signup</title>
	</head>
	
	<body>
		<form action = "signup.php" method = 'POST'>
		<div class="header">
			<h2>Register</h2>
		</div>
			<table align="center" cellspacing="30">
				<tr><td>Username</td><td><input type="text" name="Username" required  width="300px" placeholder="Enter your full name"/></td></tr>
				<tr><td>DOB</td><td><input type="Date" name="DOB" required /></td></tr>
				<tr><td>Gender</td><td><select required name="Gender">
					<option>Select your option</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="other">Others</option>
	
				</select></td></tr>
				<tr><td>Email</td><td><input type="email" name="Email" required placeholder="Enter your email"/></td></tr>
				<tr><td>Password</td><td><input type="password" name="Password" required placeholder="Enter your password"/></td></tr>
				<tr><td>Mobile_No</td><td><input type="number" name="Mobile_No" required placeholder="Enter your contact no."/></td></tr>
				<tr><td><input type="submit" value="signup" name="signup"/></td><td><button><a href = "login.html">Login</a></button></td></tr>
				
			</table>
		</form>
	</body>

<html>

<?php
	$conn = mysqli_connect("localhost","root","") or die("connection failed");
	//echo 'connection sucess';
	mysqli_select_db($conn,'membership') or die("no db found");
	
if(isset($_POST['signup'])){
$Username = $_POST['Username'];
$DOB = $_POST['DOB'];
$Gender = $_POST['Gender'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Mobile_No = $_POST['Mobile_No'];

$sql = "INSERT INTO details(Username,DOB,Gender,Email,Password,Mobile_No)  VALUES('$Username','$DOB','$Gender','$Email','$Password','$Mobile_No')";

if(mysqli_query($conn,$sql)){
	header ("login.html");
}
}

?>
