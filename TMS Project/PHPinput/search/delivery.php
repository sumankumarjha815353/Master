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
$mobileno = $_POST['mobileno'];
if($mobileno=='')
 {
  echo"no input data";
 }
 else
 {
	if($mobileno!='')
	{
	$sql = "SELECT mobileno, orderdate FROM deliverystatus where mobileno='$mobileno' ";
	}
 
	
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
	<table border="3" width="100%">
		<th>Mobile No</th>
		<th>Order date</th>
		<tr>
			<td><?php echo  $row["mobileno"];?></td>
			<td><?php echo  $row["orderdate"];?></td>
			
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