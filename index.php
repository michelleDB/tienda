<?php
$pulseras = array();
$pulseras[001] = array(
    "nombre" => "Pulsera 1",
    "descripcio" => "Pulsera de zamak",
    "imagen" => "img/pulsera1.jpg",
    "precio" => 24.95
);
$pulseras[002] = array(
    "nombre" => "Pulsera 1",
    "descripcio" => "Pulsera de zamak",
    "imagen" => "img/pulsera1.jpg",
    "precio" => 24.95
);
$pulseras[003] = array(
    "nombre" => "Pulsera 1",
    "descripcio" => "Pulsera de zamak",
    "imagen" => "img/pulsera1.jpg",
    "precio" => 24.95
);
$pulseras[004] = array(
    "nombre" => "Pulsera 1",
    "descripcio" => "Pulsera de zamak",
    "imagen" => "img/pulsera1.jpg",
    "precio" => 24.95
);
$pulseras[005] = array(
    "nombre" => "Pulsera 1",
    "descripcio" => "Pulsera de zamak",
    "imagen" => "img/pulsera1.jpg",
    "precio" => 24.95
);
$pulseras[006] = array(
    "nombre" => "Pulsera 1",
    "descripcio" => "Pulsera de zamak",
    "imagen" => "img/pulsera1.jpg",
    "precio" => 24.95
);


?>


<!--Header -->
<?php
$tituloPagina = "Inicio";
$pagina = 'inicio';
include('includes/header.php');?>


<!-- Slide -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/slide1.jpeg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slide22.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slide33.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>
<!-- Fin Slide -->

<!-- Sección de Botones -->
<div class="container mt-5 mb-5">
  <div class="row justify-content-center">
   <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 align-self-center">
    <div class="block-two-1">
      <img title="Pendientes - Oui Petit" alt="Pendientes de oro y plata para mujer - Oui Petit" src="img/ultnovedades1.png">
      <div class="content-block-two-1">
        <div class="sub-content-block-two-1">
          <p class="text-block-two-1">&nbsp;</p>
          <p class="text-block-two-1"><a title="Pendientes online - Oui Petit" href="">Ultimas novedades</a></p>
        </div>
      </div>
      <div class="contenedor-oscurecedor"></div>
    </div>
  </div>
  <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 align-self-center">
    <div class="block-two-1">
      <img title="Pendientes - Oui Petit" alt="Pendientes de oro y plata para mujer - Oui Petit" src="img/ultnovedades2.jpg">
      <div class="content-block-two-1">
        <div class="sub-content-block-two-1">
          <p class="text-block-two-1">&nbsp;</p>
          <p class="text-block-two-1"><a title="Pendientes online - Oui Petit" href="">Mamás</a></p>
        </div>
      </div>
      <div class="contenedor-oscurecedor"></div>
    </div>
  </div>
  <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 align-self-center">
    <div class="block-two-1">
      <img title="Pendientes - Oui Petit" alt="Pendientes de oro y plata para mujer - Oui Petit" src="img/ultnovedades3.jpg">
      <div class="content-block-two-1">
        <div class="sub-content-block-two-1">
          <p class="text-block-two-1">&nbsp;</p>
          <p class="text-block-two-1"><a title="Pendientes online - Oui Petit" href="">Nacimientos</a></p>
        </div>
      </div>
      <div class="contenedor-oscurecedor"></div>
    </div>
  </div>
</div>
</div>


<!-- Novedades -->
<div class="container mt-5 pt-5">
  <h1 class="text-center">Novedades</h1>
</div>
<div class="container novedades">
  <div class="row justify-content-center">
    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 align-self-center"> <!--bg-info-->
      <img class="img-fluid img-responsive mt-3" src="img/novedad1.png">
      <div class="mt-3">
        <h6 class="text-center font-weight-bold">Pendientes de perla natural</h6>
        <h6 class="text-center text-secondary mt-3 mb-3">25,00€</h6>
      </div>
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 align-self-center"> <!--bg-danger-->
      <img class="img-fluid mt-3" src="img/novedad2.png">
      <div class="mt-3">
        <h6 class="text-center font-weight-bold">Pendientes de perla natural</h6>
        <h6 class="text-center text-secondary mt-3 mb-3">25,00€</h6>
      </div>
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 align-self-center"> <!--bg-warning-->
     <img class="img-fluid mt-3" src="img/novedad3.png">
     <div class="mt-3">
      <h6 class="text-center font-weight-bold">Pendientes de perla natural</h6>
      <h6 class="text-center text-secondary mt-3 mb-3">25,00€</h6>
    </div>
  </div>
  <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 align-self-center"> <!--bg-success-->
   <img class="img-fluid mt-3" src="img/novedad4.png">
   <div class="mt-3">
    <h6 class="text-center font-weight-bold">Pendientes de perla natural</h6>
    <h6 class="text-center text-secondary mt-3 mb-3">25,00€</h6>
  </div>
</div>
</div>
</div>


<!-- Quienes somos -->
<div class="container-fluid contenedor-q">
  <div class="row fila-quienes-somos">
    <h3>fjhdf</h3>
  </div>
</div>

<!-- Footer -->
<?php include('includes/footer.php');?>