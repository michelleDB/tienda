<?php
$tituloPagina = "Crear cuenta - ";
$pagina = 'nuevo_usuario';
include('includes/header.php');
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col align-self-center">
            <h1>Iniciar sesión</h1>
            <form method="post" action="api/api-users.php">
                <div class="form-group">
                    <input type="text" name="nombre" class="form-control" id="inputNombre" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <input type="text" name="apellido" class="form-control" id="inputApellido" placeholder="Apellido">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Dirección de correo electrónico">
                </div>
                <div class="form-group">
                    <input type="password" name="contrasena" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                </div>
                <div class="form-group row">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                            Acepto los términos y condiciones y política de privacidad.
                        </label>
                    </div>
                    <button type="submit" name="nuevo_usuario" class="btn btn-primary">Crear cuenta</button>
            </form>
        </div>

    </div>
</div>

<?php
include('includes/footer.php');
?>