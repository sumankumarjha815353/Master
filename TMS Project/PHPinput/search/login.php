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
	$sql = "SELECT name, username, password,passwordhint,email,phone FROM login where name='$name' ";
	}
 
	
	$result = $conn->query($sql);

	if ($result->num_rows > 0) 
	{
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
      ?>
		<table border="3" width="100%">
		<th>NAME</th>
		<th>USERNAME</th>
		<th>PASSWORD</th>
		<th>PASSWORDHINT</th>
		<th>EMAIL</th>
		<th>PHONE</th>
		<tr>
			<td><?php echo  $row["name"];?></td>
			<td><?php echo  $row["username"];?></td>
			<td><?php echo  $row["password"];?></td>
			<td><?php echo  $row["passwordhint"];?></td>
			<td><?php echo  $row["email"];?></td>
			<td><?php echo  $row["phone"];?></td>
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