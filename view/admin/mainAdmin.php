<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/sistemagym/routes.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include_once('../../header.php')  ?>
  <title>Admin</title>

</head>

<style>
  body {

background-image: url('/assets/images/hero.jpg');
background-size: cover;
background-position: center;
background-repeat: no-repeat;
}
</style>

<body>
  <?php
  require_once('navbar.php');
  ?>
  <div class="container">
    <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
      <div class="col-md-4">
        <a href="/sistemagym/view/miembros/createMiembro.php" class="boton-menu">
          <div class="icon-box text-center  ">
            <i class="fa fa-user-plus fa-2x"></i>
          </div>
          <p class="text-center">Agregar Nuevo Miembro</p>
        </a>
      </div>

      <div class="col-md-4">
        <a href="" class="boton-menu">
          <div class="icon-box text-center  ">
            <i class="fa fa-users fa-2x"></i>
          </div>
          <p class="text-center">Lista miembros</p>
        </a>
      </div>

      <div class="col-md-4">
        <a href="../instructores/index.php" class="boton-menu">
          <div class="icon-box text-center  ">
            <i class="fa fa-user-plus fa-2x"></i>
          </div>
          <p class="text-center">Instructores</p>
        </a>
      </div>

      <div class="col-md-4">
        <a href="" class="boton-menu">
          <div class="icon-box text-center  ">
            <i class="fa fa-dollar fa-2x"></i>
          </div>
          <p class="text-center">Pagos y Estadisticas</p>
        </a>
      </div>

      <div class="col-md-4">
        <a href="/sistemagym/view/modalidad/index.php" class="boton-menu">
          <div class="icon-box text-center  ">
            <i class="fa fa-comments fa-2x"></i>
          </div>
          <p class="text-center">Modalidades</p>
        </a>
      </div>
    </div>
  </div>

</body>
<?php include_once('../../footer.php')  ?>

</html>
