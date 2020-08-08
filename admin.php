
<!Doctype html>
<head>
<title>Login page</title>
<link href="login.css" rel="stylesheet">

</head>
<body>
<div class="login-box">
<img src="avatar.png" class="avatar">
<h1>Login Here</h1>
<form  action = "valid_admin.php" method = 'post'> 
<p>Email</p>
<input type="email" name="email" id="email" required placeholder = "Enter your email" >
<p>Password</p>
<input type="password" name="password" required placeholder="Enter your password">
<br><button id = "bnm" value = "submit">Login</button></br>
<a href="for.html">Forget Password</a>
<?php
if(isset($_POST['submit']){
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		if($email = '' && $password = ''){
		header("view_member.php");
		}
		else{
		window.alert("please enter correct email and password");
		}
}
?>
</form>
</div>
</body>
</html>