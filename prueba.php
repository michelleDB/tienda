<?php

$servidor = "localhost";
$usuariobd = "michelle";
$contrasenabd = "michelle";
$basededatos = "tienda_michelle";

//INSERT
$sql = "INSERT INTO usuario(nombre_usuario, apellido_usuario, contrasena_usuario, email_usuario) VALUES ('" . $_GET['nombre'] . "', '" . $_GET['apellido'] . "', '" . md5($_GET['contrasena']) . "', '" . ($_GET['email']) . "')";
$conexion = @mysqli_connect($servidor, $usuariobd, $contrasenabd, $basededatos);
if (!$conexion) {
   die("Connection failed: " . mysqli_connect_error());
}

if (mysqli_query($conexion, $sql)) {
   echo "New record created successfully";
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
echo json_encode($sql);
mysqli_close($conexion);








?>
