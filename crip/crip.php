<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>

<body>
<?php
$var = 'hola';
echo $var . '<br>';

$salida1 = md5($var);
echo $salida1 . '<br>';

$salida2 = md5($var);
echo $salida2 . '<br>';

$salida2 = sha1($var);
echo $salida2 . '<br>';

$salida2 = hash('sha256', $var);
echo $salida2 . '<br>';

$token = 'token';
$contrasenna ='contraseña';
$fecha = time();
echo ($token . '_' . $contrasenna . '_' . $fecha) . '<br>'
?>

</body>

</html>