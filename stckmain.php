<html>
<head>
<link href="stck.css" rel="stylesheet">
</head>
<body background="img.jpeg" text="red">
<form action = "stckmain.php" method = 'POST'>
<center>
<font size="40px">
<h><b>STOCK MAINTENANCE</b></h></font>
<table align="center" cellspacing="10px">
<tr><td>Book Name:</td><td><input type="text" name="book_name" required placeholder="Enter book name"></td></tr></br></br>
<tr><td>Book Code:</td><td><input type="text" name="book_code" required placeholder="Enter Book code"></td></tr></br></br>
<tr><td>Author:</td><td><input type="text" name="author" required placeholder="Enter Author"></td></tr></br></br>
<tr><td>Date of Arrival:</td><td><input type="date" name="DOA" required placeholder = "enter Date"></td></tr></br></br>
<!--<tr><td>No.of Books:</td><td><input type="text" name="No.of Books"placeholder="Enter no of books"></td></tr></br></br>-->
<tr><td>Subject Code:</td><td><input type="text" name="sub_code" required placeholder="Enter subject code"></td></tr></br></br>

</table>
<input type="submit" value="ADD" name = "button">
</center>
</form>
</body>
</html>


<?php
	$conn = mysqli_connect("localhost","root","") or die("connection failed");
	//echo 'connection sucess';
	mysqli_select_db($conn,'membership') or die("no db found");
	
	
if(isset($_POST['button'])){
$book_name = $_POST['book_name'];
$book_code = $_POST['book_code'];
$author = $_POST['author'];
$DOA = $_POST['DOA'];
$sub_code = $_POST['sub_code'];

$sql = "INSERT INTO stmain(book_name,book_code,author,DOA,sub_code)  VALUES('$book_name','$book_code','$author','$DOA','$sub_code')";

if(mysqli_query($conn,$sql)){
	//header ("l.html");
}
}

?>