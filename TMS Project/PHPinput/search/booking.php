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
$orderdate = $_POST['orderdate'];
if($orderdate=='')
 {
  echo"no input data";
 }
 else
 {
	if($orderdate!='')
	{
	$sql = "SELECT source, destination, goodsquantity,units,phone FROM booking where orderdate='$orderdate' ";
	}
 
	
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
	<table border="3" width="100%">
		<th>Source</th>
		<th>destination</th>
		<th>goodsquantity</th>
		<th>units</th>
		<th>phone</th>
		<tr>
			<td><?php echo  $row["source"];?></td>
			<td><?php echo  $row["destination"];?></td>
			<td><?php echo  $row["goodsquantity"];?></td>
			<td><?php echo  $row["units"];?></td>
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