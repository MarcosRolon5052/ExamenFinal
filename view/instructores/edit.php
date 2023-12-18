<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/sistemagym/routes.php');
    require_once(CONTROLLER_PATH.'instructorController.php');
    $object = new instructorController();
    $idInstructor = $_GET['idInstructor'];
    $instructor = $object->search($idInstructor);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>
<body>
    <?php
        require_once(VIEW_PATH.'/navbar/navbar.php');
    ?>
    <div class="container">
        <div class="mb-3">
            <h2>Editando registro</h2>
        </div>
        <form id="formPersona" action="update.php" method="post" class="g-3 needs-validation" novalidate>
            <div class="mb-3">
                <label for="id" class="form-label">ID Instructor</label>
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <input value="<?=$instructor[0]?>" type="text" class="form-control" id="idInstructor" name="idInstructor" readonly>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <input value="<?=$instructor[1]?>" type="text" class="form-control" id="nombre" name="nombre" autofocus required>
                 <div class="invalid-feedback">ingrese un nombre válido!</div>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input value="<?=$instructor[2]?>" type="text" class="form-control" id="apellido" name="apellido" required>
                 <div class="invalid-feedback">ingrese un apellido válido!</div>          
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input value="<?=$instructor[3]?>" type="text" class="form-control" id="telefono" name="telefono" required>
                 <div class="invalid-feedback">ingrese un teléfono válido!</div>          
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input value="<?=$instructor[4]?>" type="text" class="form-control" id="email" name="email" required>
                 <div class="invalid-feedback">ingrese un email válido!</div>          
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input value="<?=$instructor[5]?>" type="text" class="form-control" id="direccion" name="direccion" required>
                 <div class="invalid-feedback">ingrese un dirección válido!</div>          
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
    </div>
</body>
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/validate.js"></script>
</html>