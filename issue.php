<html>
<head>
<link href="issue.css" rel="stylesheet">
</head>
<body background="return.jpg">
<center>
<form action = "issue.php" method = "POST">
<font size="30px">
<h><b>ISSUE OF BOOKS</b></h></font>
<h1></h1><table align = "center" cellspacing = "10">
<tr><td>Email</td><td><input type="email" name="Email" required placeholder="Enter your email"></td></tr>
<tr><td>Book Code</td><td><input type="number" name="book_code" placeholder="Enter book code"></td></tr>
<tr><td>Date of Issue</td><td><input type="date" name="DOI" placeholder="Date of issue"></td></tr>
<tr><td>Date of Return</td><td><input type="date" name="DOR" placeholder="Date of return"></td></tr>
<tr><td><input align = "center" type="submit" value="ADD" name = "ADD"></td></tr>
</table>
</form>
</center>
</body>
</html>

<?php
	$conn = mysqli_connect("localhost","root","") or die("connection failed");
	//echo 'connection sucess';
	mysqli_select_db($conn,'membership') or die("no db found");
	
if(isset($_POST['ADD'])){
$Email = $_POST['Email'];
$book_code = $_POST['book_code'];
$DOI = $_POST['DOI'];
$DOR = $_POST['DOR'];

$sql = "INSERT INTO issue_book(Email,book_code,DOI,DOR)  VALUES('$Email','$book_code','$DOI','$DOR');";

if(mysqli_query($conn,$sql)){
	//header ("login.html");
}
}

?>
