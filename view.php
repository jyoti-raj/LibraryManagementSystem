<html>
	<head>
		<title>
			View page
		</title>
	</head>
	<body bgcolor="#990099">
		<form action = "view.php" method = "POST">
			<table align="center" border="1" width="90%" bgcolor="#ff99ff" cellpadding="5">
				<tr><th>Email</th>
				<th>Book Code</th>
				<th>Date Of Issue</th>
				<th>Date Of Return</th></tr>
				<?php
				$conn = mysqli_connect("localhost","root","","membership");
				if($conn -> connect_error){
					die("connection failed:" . $conn -> connect_error);
				}
				$sql = "select issue_book.Email,issue_book.book_code,issue_book.DOI,return_book.DOR from issue_book join return_book where (issue_book.Email = return_book.Email); "; 
				$result = $conn -> query($sql);
				if($result -> num_rows > 0){
					while($row = $result -> fetch_assoc()){
						echo "<tr><td>".$row["Email"]."</td><td>".$row["book_code"]."</td><td>".$row["DOI"]."</td><td>".$row["DOR"]."</td></tr>";
					}
					echo "</table>";
				}
				else{
					echo "0 result";
				}
				$conn -> close();
				?>
			</table>
		</form>
	</body>
</html>