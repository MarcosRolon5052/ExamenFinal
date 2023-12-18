<?php
// session_start();
// if (!isset($_SESSION["usuario"])) {
//    header('location: ../usuario/login.php');
// }

include_once($_SERVER['DOCUMENT_ROOT'] . '/sistemagym/routes.php');
require_once(CONTROLLER_PATH . 'instructorController.php');
$object = new instructorController();
$idInstructor = $object->last();
$ultimo = ("$idInstructor[0]") + 1;
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title>Form PHP</title>
</head>

<body>
    <?php
    require_once(VIEW_PATH . 'navbar/navbar.php');
    ?>
    <div class="container">
        <div class="mb-3">
            <h2>Agregando nuevo registro</h2>
        </div>
        <form id="formPersona" action="store.php" method="post" class="g-3 needs-validation" novalidate>
            <div class="mb-3">
                <label class="form-label" for="text">ID</label>
                <input type="text" value="<?= $ultimo ?>" name="idInstructor" id="idInstructor" class="form-control w-25" readonly />
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <input type="text" class="form-control" id="nombre" name="nombre" autofocus required>
                <div class="invalid-feedback">ingrese un nombre válido!</div>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
                <div class="invalid-feedback">ingrese un apellido válido!</div>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required>
                <div class="invalid-feedback">Ingrese un telefono válido!</div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" required>
                <div class="invalid-feedback">Ingrese un email válido!</div>
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion" required>
                <div class="invalid-feedback">Ingrese un direccion válido!</div>
            </div>

            <button type="submit" class="btn btn-primary btn-lg col-4">Guardar</button>
        </form>
    </div>
</body>
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/validate.js"></script>

</html>