<html>
<head>
<link href="issue.css" rel="stylesheet">
</head>
<body background="return.jpg">
<center>
<form action = "return.php" method = "POST">
<font size="30px">
<h><b>RETURN OF BOOKS</b></br></h></font>
<h1></h1>
<table align="center" cellspacing="20px">
<tr><td>Email</td><td><input type="email" name="Email"required placeholder="Member_Id No"></td></tr><br/><br/>
<tr><td>Book Code</td><td><input type="number" name="book_code" required placeholder="Book Code"></td></tr><br/><br/>
<tr><td>Date of issue</td><td><input type="date" name="DOI"></td></tr><br/><br/>
<tr><td>Date of Return</td><td><input type="date" name="DOR"></td></tr><br/><br/>
</table>
<input type="submit" value="Return" name = "Return">
</form>
</center>
</body>
</html>

<?php
	$conn = mysqli_connect("localhost","root","") or die("connection failed");
	//echo 'connection sucess';
	mysqli_select_db($conn,'membership') or die("no db found");
	
if(isset($_POST['Return'])){
$Email = $_POST['Email'];
$book_code = $_POST['book_code'];
$DOI = $_POST['DOI'];
$DOR = $_POST['DOR'];

$sql = "DELETE FROM return_book where Email = '$Email'";

if(mysqli_query($conn,$sql)){
	//header ("login.html");
}
}

?>
