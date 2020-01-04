	<?php 
	$servername ="localhost";
	$username ="root";
	$password = "";
	$dbName ="tms";

//create connection
	$conn = new mysqli($servername, $username, $password, $dbName);
//check connection

	if ($conn->connect_error)
	{
		die ("Connection failed". $conn->connect_error);
	}

	$source=$_POST['source'];
	$destination=$_POST['destination'];
	$goodsquantity=$_POST['goodsquantity'];
	$units=$_POST['units'];
	$orderdate=$_POST['orderdate'];
	$phone=$_POST['phone'];
	
	
	$sql = "INSERT INTO booking (source, destination, goodsquantity,units,orderdate,phone) 
			VALUES ('$source', '$destination', '$goodsquantity','$units','$orderdate','$phone')";

if ($conn->query($sql) === TRUE) 
	{
    echo "Your Order Booked successfully";
	} 
else 
	{
    echo "Error: " . $conn->error;
	}

$conn->close();
	
?>
							