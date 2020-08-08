


<!Doctype html>
<head>
<title>Login page</title>
<link href="login.css" rel="stylesheet">

</head>
<body>
<div class="login-box">
<img src="avatar.png" class="avatar">
<h1>Login Here</h1>
<form  action = "validation1.php" method = 'POST' > 
<p>Email</p>
<input type="email" name="Email" id="email" required placeholder = "Enter your email" >
<p>Password</p>
<input type="password" name="Password" required placeholder="Enter your password">
<br><button id = "bnm" value = "submit" name = "submit">Login</button></br>

<?php
if(isset($_POST['submit'])
{
		$Email = $_POST['Email'];
		$Password = $_POST['Password'];
		
		if($Email = '' && $Password = ''){
		header("b.html");}

		else{
		echo "<script type = 'text/javascript'>alert("Please enter correct email amd password");</script>";
		
}
?>
</form>
</div>
</body>
</html>