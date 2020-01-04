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
	$username= $_POST['username'];
	$password= $_POST['password'];
	$passwordhint= $_POST['passwordhint'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	
	
	$sql = "INSERT INTO login (name, username, password, passwordhint, email, phone ) 
			VALUES ('$name','$username','$password','$passwordhint','$email', '$phone')";

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
							