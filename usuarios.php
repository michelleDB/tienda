<?php
$tituloPagina = "Acceso del cliente - ";
$pagina = 'usuarios';
include('includes/header.php');
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 align-self-center">
            <h1>Iniciar sesión</h1>
            <form method="post" action="api/api-users.php">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Dirección de correo electrónico">
                </div>
                <div class="form-group">
                    <input type="password" name="contrasena" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                </div>
                <button type="submit" name="login" class="btn btn-primary">Iniciar sesión</button>
            </form>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 align-self-center">
            <h1>Crear nueva cuenta</h1>
            <p>Si aún no tienes una cuenta P D PAOLA, utiliza esta opción para acceder al formulario de registro. Dándonos tus detalles, tu compra en pdpaola.com se efectuará de forma mucho más rápida y agradable.</p>
            <a class="btn btn-primary" href="nuevo_usuario.php" role="button">Crear cuenta</a>
        </div>
    </div>
</div>

<!-- Footer -->
<?php
include('includes/footer.php');
?>

