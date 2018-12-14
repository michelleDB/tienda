<?php

if (isset($_POST['login'])) {
    login();
} else if (isset($_POST['nuevo_usuario'])) {
    registrar($_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['contrasena']);
}

function registrar($nombre, $apellido, $email, $contrasena) {
    include ('./mysqli.php');
    md5($contrasena);
    $conexion = mysqli_connect($servidor, $usuariobd, $contrasenabd, $basededatos) or die("No se ha podido conectar al servidor de Base de datos" . "valor " . $servidor . "fin valor");
    $sql = "INSERT INTO usuario (nombre_usuario, apellido_usuario, contrasena_usuario,email_usuario) VALUES ('$nombre', '$apellido', '$email', '$contrasena')";


    if (mysqli_query($conexion, $sql)) {
        echo "Nuevo usuario creado.";
    } else {
        echo "conexion " . $conexion;
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
    echo json_encode($sql);
    mysqli_close($conexion);
}

function login() {
    
}

?>