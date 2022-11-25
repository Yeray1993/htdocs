<?php
$token = 'asd';
//email password

//comprobar que llegan los campos
if (empty($_POST['email'])) {
echo 'Error: no llego email';
exit;
}
if (empty($_POST['password'])) {
echo 'Error: no llego password';
exit;
}

//convertir POST a variable
$email = $_POST['email'];
$password = $_POST['password'];

echo $email . '<br>';
echo $password . '<br>';
?>

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

$sql = "SELECT * FROM MyGuests WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "OK<br>";
} else {
echo "Error: " . $conn->error;
}
echo '<hr>';
var_dump($result);
echo '<hr>';

while ($row = $result->fetch_assoc()) {
echo "id: " . $row["id"] . " - Name: " . $row["nombre"] . " " . $row["edad"];
echo " Email:" . $row["email"] . "<br>";
}

/*

*/
$conn->close();
?>
