<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<style>
th, td{
 border: 2px solid black; 
 }
</style>
</head>

<body>

<?php
function conectar_DB(){
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
return $conn;
}

$conn=conectar_DB();
$sql = "SELECT * FROM MyGuests";
$result = $conn->query($sql);
echo '<hr>';

    echo '<table>' ;
    
    echo '<th>Nombre</th>' ;
    echo '<th>edad</th>' ;
    echo '<th>email</th>' ;
    foreach ($result as $key => $value) {
        echo '<tr>' ;
    echo  '<td>' .$value  ['nombre']. '</td>';
    echo  '<td>'  .$value ['edad']. '</td>' ; 
    echo  '<td>' .$value ['email'].'</td>' ;
    echo '</tr>' ;
    var_dump($value);

// var_dump($value);
// echo '<br>';
// echo '<br>';
}
echo '</table>' ;

$conn->close();
?>
</body>
</html>