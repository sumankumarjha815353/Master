<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "el";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO feedback (name, email, phone, remarks)
VALUES ('Abhishek', 'Ajjasidih@gmail.com', '8864044769', 'very good')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>