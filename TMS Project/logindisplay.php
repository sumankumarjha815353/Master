<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name, username, password, passwordhint,email,phone FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		 ?>
	<table border="2" width="100%" >
	
			<th>Name:</th>
			<th>Username:</th>
			<th>Password:</th>
			<th>Passwordhint:</th>
			<th>Email:</th>
			<th>Phone:</th>
		 
		<tr>	
			<td align="center"><?php echo  $row["name"];?></td>	
			<td align="center"><?php echo  $row["username"];?></td>
			<td align="center"><?php echo  $row["password"];?></td>
			<td align="center"><?php echo  $row["passwordhint"];?></td>
			<td align="center"><?php echo  $row["email"];?></td>
			<td align="center"><?php echo  $row["phone"];?></td>
		</tr>
		
	
	</table>
	<?php
    }
} else {
    echo "no data avilable";
}
$conn->close();
?>