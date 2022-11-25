<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

/*

*/
$nombre='John';
$email='eric.casanova@kjadfas';
/*

*/
$sql = "SELECT * FROM MyGuests WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows >0) {
echo "NO GUARDAR DATOS<br>";
} else {

$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('$nombre', 'Doe', '$email')";
if ($conn->query($sql) === TRUE) {
echo "GUARDAR";
} else {
echo "Error creating table: " . $conn->error;
}
}

/*

*/
$conn->close();

?>