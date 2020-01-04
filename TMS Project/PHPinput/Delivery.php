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

	$orderdate= $_POST['orderdate'];
	$mobileno= $_POST['mobileno'];

	
	
	$sql = "INSERT INTO deliverystatus(orderdate, mobileno) 
			VALUES ('$orderdate', '$mobileno')";

if ($conn->query($sql) === TRUE) 
	{
    echo "Thank you dear one";
	   echo "Our officer will give the details of your order shortly";
	} 
else 
	{
    echo "Error: " . $conn->error;
	}

$conn->close();
	
?>
							