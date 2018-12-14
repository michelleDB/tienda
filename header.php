
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>La Ratita Presumida | Bisutería hecha a mano | <?php echo $tituloPagina;?></title>
</head>
<body>
  <!-- Barra superior-->
  <div class="container-fluid text-center pt-1 pb-1 header-top">
    <h6>Gastos de envio GRATIS a partir de 40€</h6>
  </div>

  <!-- Menú -->
  <div class="container-fluid text-center pt-1 pb-1 sticky-top color-fondo-1" id="menu-contenedor">
   <nav class="navbar navbar-expand-lg color-fondo-1" id="menu-principal">
    <a class="navbar-brand" href="index.php">
    <img class="img-fluid" src="img/logo.png" id="img-logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto ml-auto">
        <li class="nav-item">
          <a class="nav-link mr-4 <?php if ($pagina == 'pulseras'){ echo 'active';}?>" href="pulseras.php">PULSERAS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mr-4 <?php if ($pagina == 'collares'){ echo 'active';}?>" href="collares.php">COLLARES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mr-4 <?php if ($pagina == 'anillos'){ echo 'active';}?>" href="anillos.php">ANILLOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mr-4 <?php if ($pagina == 'pendientes'){ echo 'active';}?>" href="pendientes.php">PENDIENTES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mr-4 <?php if ($pagina == 'personalizado'){ echo 'active';}?>" href="personalizado.php">PERSONALIZADO</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            PEDRITA PARKER
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">MOCHILAS</a>
            <a class="dropdown-item" href="#">TAZAS</a>
            <!--<div class="dropdown-divider"></div>-->
            <a class="dropdown-item" href="#">ESPEJOS</a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav mr-right">
        <li class="nav-item mr-3">
          <a class="nav-link" href="#"><img src="img/busqueda1.png"></a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link" href="usuarios.php"><img src="img/usuario2.png"></a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link" href="#"><img src="img/carrito2.png"></a>
        </li>
      </ul>
    </div>
  </nav>
</div>
<!-- Fin Menu -->