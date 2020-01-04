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

	$name= $_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$remarks=$_POST['remarks'];
	
	
	$sql = "INSERT INTO feedback (name, email, phone, remarks) 
			VALUES ('$name', '$email', '$phone', '$remarks')";

if ($conn->query($sql) === TRUE) 
	{
    echo "New record created successfully";
	} 
else 
	{
    echo "Error: " . $conn->error;
	}

$conn->close();
	
?>
							