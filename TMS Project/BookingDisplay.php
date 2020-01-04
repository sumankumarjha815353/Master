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

$sql = "SELECT source, destination, goods quantity,units,loadingdate remarks FROM feedback";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		 ?>
	<table border="2" width="100%" bgcolor="pink">
		<tr>
			<th>Name:</th>
			<th>Email:</th>
			<th>Phone:</th>
			<th>Remarks:</th>
		  </tr> 
		<tr>		
			<td align="center"><?php echo  $row["name"];?></td>	
			<td align="center"><?php echo  $row["email"];?></td>
			<td align="center"><?php echo  $row["phone"];?></td>
			<td align="center"><?php echo  $row["remarks"];?></td>
		</tr>
	</table>
	<?php
       
    }
} 
else {
    echo "no data avilable";
}
$conn->close();
?>