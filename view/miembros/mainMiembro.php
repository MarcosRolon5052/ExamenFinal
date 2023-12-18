    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include_once ($_SERVER['DOCUMENT_ROOT'].'/sistemagym/routes.php');
    require_once('navbar.php');
    include_once('../../header.php');

    // Realiza la conexión a la base de datos (reemplaza estos valores con los tuyos)
    $conexion = new mysqli('localhost', 'root', '12345678', 'basepower');

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("La conexión falló: " . $conexion->connect_error);
    }

    // Obtiene el alias del usuario
    $aliasQuery = 'SELECT alias FROM usuario';
    $aliasResult = $conexion->query($aliasQuery);

    // Verifica si la consulta fue exitosa
    if ($aliasResult) {
        $aliasRow = $aliasResult->fetch_assoc();
        $alias = $aliasRow['alias'];
    } else {
        $alias = 'Usuario Desconocido';
    }

    // Cierra la conexión a la base de datos
    $conexion->close();
?>



<!-- ======= Hero Banner Superior ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
            <h2 style="color: white">¡Hola <?php echo $alias; ?>!</h2>          
        <div>
            <p>¡Bienvenido de nuevo a nuestro gimnasio! Estamos emocionados de tenerte aquí.</p>
            <p>Tu membresía vence el 30 de febrero. ¡No olvides revisar nuestros horarios de clases</p>
            <p>Explora nuestros programas de entrenamiento</p>
            <p>¿Tienes alguna pregunta o sugerencia? ¡Háganoslo saber!</p>
         </div>          
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="../../assets/images/Logo.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    
    </div>
  </section>
  <!-- End Hero Section -->

  <div class="container">
    <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
      <div class="col-md-4">
        <a href="/view/admin/createMiembro.php" class="boton-menu">
          <div class="icon-box text-center  ">
            <i class="fa fa-users fa-2x"></i>
          </div>
          <p class="text-center">Mis Rutinas</p>
        </a>
      </div>

      <div class="col-md-4">
        <a href="/sistemagym/view/membresias/membresiaPago.php" class="boton-menu">
          <div class="icon-box text-center  ">
            <i class="fa fa-list fa-2x"></i>
          </div>
          <p class="text-center">Comprar Membresía</p>
        </a>
      </div>

      <div class="col-md-4">
        <a href="" class="boton-menu">
          <div class="icon-box text-center  ">
            <i class="fa fa-user-plus fa-2x"></i>
          </div>
          <p class="text-center">Reservas</p>
        </a>
      </div>

      <div class="col-md-4">
        <a href="" class="boton-menu">
          <div class="icon-box text-center  ">
            <i class="fa fa-dollar fa-2x"></i>
          </div>
          <p class="text-center">Pagos</p>
        </a>
      </div>

      <div class="col-md-4">
        <a href="" class="boton-menu">
          <div class="icon-box text-center  ">
            <i class="fa fa-comments fa-2x"></i>
          </div>
          <p class="text-center">Reseñas</p>
        </a>
      </div>
    </div>
  </div>
