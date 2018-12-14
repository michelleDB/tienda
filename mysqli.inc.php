<?php

$servidor = "localhost";
$usuariobd = "michelle";
$contrasenabd = "michelle";
$basededatos = "tienda_michelle";

$conexion = mysqli_connect($servidor, $usuariobd, $contrasenabd, $basededatos) or die("No se ha podido conectar al servidor de Base de datos" .mysql_error());