<?php
    // session_start();
    // if (!isset($_SESSION["usuario"])) {
    //    header('location: ../usuario/login.php');
    // }

    include_once ($_SERVER['DOCUMENT_ROOT'].'/sistemagym/routes.php');
    require_once(CONTROLLER_PATH.'modalidadController.php');
    $object = new modalidadController();
    $idModalidad = $object->last();
    $ultimo = ("$idModalidad[0]") + 1;
    $instructores = $object->combolist();
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
        require_once(VIEW_PATH.'navbar/navbar.php');
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
                <label for="nombre_modalidad" class="form-label">Modalidad</label>
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <input type="text" class="form-control" id="nombre_modalidad" name="nombre_modalidad" autofocus required>
                 <div class="invalid-feedback">ingrese una modalidad válida!</div>
            </div>
            <div class="mb-3">
                <label for="costo" class="form-label">Costo</label>
                <input type="number" class="form-control" id="costo" name="costo" required>
                <div class="invalid-feedback">ingrese un costo válido!</div>
            </div>
            <div class="mb-3">
                <label for="idInstructor" class="form-label">Código instructor</label>
                <select class="form-control" name="idInstructor" id="idInstructor" required>
                    <option selected disabled value="">No especificado</option>
                    <?php foreach ($instructores as $instructor) { ?>
                       <option value="<?=$instructor['idInstructor']?>"><?=$instructor['nombre']?> <?=$instructor['apellido']?></option> 
                    <?php } ?>
                </select>
                <div class="invalid-feedback">seleccione un elemento válido!</div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg col-4">Guardar</button>
            </form>
    </div>
</body>
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/validate.js"></script>

</html>