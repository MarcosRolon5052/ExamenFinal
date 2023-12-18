<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/sistemagym/routes.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../assets/images/Logo.jpg" type="image/x-icon">
    <link rel="shortcut icon" href="../../assets/images/Logo.jpg" type="image/x-icon">
    <title>Iniciar Sesión</title>
    <?php include_once (ROOT_PATH . 'header.php') ?>
    <style>
        body {
            background-image: url('../../assets/images/loginFondo.jpg');
            background-position: center;
            background-size: cover;
            text-align: center;
            padding: 50px;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        h2 {
            color: navy; 
            margin-bottom: 40px;
        }

        label {
        color: navy;
        margin-top: 20px;
        margin-bottom: 20px;
        }

        .btn-orange {
            background-color: #e67e22;
            border-color: #d35400;
            color: #fff;
            margin-top: 30px;
        }
        
        /* Agrega estilos para ajustar el pie de página */
        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: #333; /* Color de fondo del pie de página */
            padding: 10px;
        }
    </style>
</head>
<body>
<div class="container login-container">
    <h2>Iniciar Sesión</h2>
    <form id="formLogin" method="post" autocomplete="off">
        <div class="form-group">
            <label class="form-label" for="usuario">Usuario:</label>
            <input type="usuario" class="form-control form-control-lg" placeholder="ingrese usuario" id="usuario" name="usuario" autocorrect="off" spellchek="false">
        </div>
        <div class="form-group">
            <label class="form-label" for="clave">Contraseña:</label>
            <input type="password" class="form-control form-control-lg" id="clave" name="clave" placeholder="digite contraseña" spellcheck="false">
        </div>
        <input type="submit" class="btn btn-orange" value="Iniciar Sesión">
    </form>
</div>

<footer class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-dark">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2023. All rights reserved.
    </div>
    <!-- Copyright -->
</footer>

<script>
</script>
<?php include_once (ROOT_PATH . 'footer.php') ?>

</body>
</html>
