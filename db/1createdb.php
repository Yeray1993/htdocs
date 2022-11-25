<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

/*

*/
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
echo "Table MyDB created successfully";
} else {
echo "Error creating table: " . $conn->error;
}
/*

*/
$conn->close();

?>