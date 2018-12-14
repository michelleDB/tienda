<!--Footer -->
<div class="container-fluid">
  <div class="row">
    <h3>Footer</h3>
  </div>
</div>

<!-- Ajax -->
<script src="js/commons.js"></script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script>
  $(window).scroll(function() {
    if ($("#menu-contenedor").offset().top > 56){
      $("#menu-principal").removeClass("color-fondo-1");
      $("#menu-principal").addClass("color-fondo-2");
      $("#menu-contenedor").removeClass("color-fondo-1");
      $("#menu-contenedor").addClass("color-fondo-2");
      $("#img-logo").attr("src","img/logo-blanco.png");
    } else {
      $("#menu-principal").addClass("color-fondo-1");
      $("#menu-principal").removeClass("color-fondo-2");
      $("#menu-contenedor").addClass("color-fondo-1");
      $("#menu-contenedor").removeClass("color-fondo-2");
      $("#img-logo").attr("src","img/logo.png");
    }
  });
</script>
</body>
</html>

