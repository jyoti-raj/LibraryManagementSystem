<!Doctype html>
<html>
<head>
<title>
Reset password
</title>
<link href="res.css" rel="stylesheet">
</head>
<body>
<img>
<div class="reset-box">
<form action = "res.html" method = 'POST' >
<h1 align="center">Reset Password</h1>
<table align="center" cellspacing="20px">
<tr><td><input type="password" name="number" required placeholder="Enter your password"/></td></tr>
<tr><td><input type="password" name="rnumber"  required placeholder="Repeat Password"/></td></tr><br/><br/>
<tr><td><input type="submit"  name = "submit" value="submit" /></td></tr>
</table>
</form>
</div>
</body>
</html>
<?php 
if(isset($_POST['submit']){
$number = $_POST['number'];
$rnumber = $_POST['rnumber'];
echo 'hell';
if($number == $rnumber)
{
		echo 'Sucess';
		}
}
?>