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
$name = $_POST['name'];
if($name=='')
 {
  echo"no input data";
 }
 else
 {
	if($name!='')
	{
	$sql = "SELECT name,email, phone,remarks,email,phone FROM feedback where name='$name' ";
	}
 
	
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
	<table border="3" width="100%">
		<th>NAME</th>
		<th>EMAIL</th>
		<th>PHONE</th>
		<th>REMARKS</th>
		<tr>
			<td><?php echo  $row["name"];?></td>
			<td><?php echo  $row["email"];?></td>
			<td><?php echo  $row["phone"];?></td>
			<td><?php echo  $row["remarks"];?></td>
		</tr>
	</table>
 
	<?php	  
		}
		} 
		else {
			echo "data not available";
			}
 }
$conn->close();
?>