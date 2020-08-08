<html>
<head><title>view member</title></head>
<body bgcolor="#990099">
		<form action = "bookview.php" method = "POST">
			<table align="center" border="1" width="90%" bgcolor="#ff99ff" cellpadding="5">
				<tr><th>id</th>
				<th>book_name</th>
				<th>book_code</th>
				<th>author</th>
				<th>DOA</th>
				<th>sub_code</th></tr>
				<?php
				$conn = mysqli_connect("localhost","root","","membership");
				if($conn -> connect_error){
					die("connection failed:" . $conn -> connect_error);
				}
				$sql = "select * from stmain"; 
				$result = $conn -> query($sql);
				if($result -> num_rows > 0){
					while($row = $result -> fetch_assoc()){
						echo "<tr><td>".$row["id"]."</td><td>".$row["book_name"]."</td><td>".$row["book_code"]."</td><td>".$row["author"]."</td><td>".$row["DOA"]."</td><td>".$row["sub_code"]."</td></tr>";
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