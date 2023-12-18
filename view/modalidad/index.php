<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/sistemagym/routes.php');
require_once(CONTROLLER_PATH . 'modalidadController.php');
$object = new modalidadController();
$rows = $object->select();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once(ROOT_PATH . 'header.php') ?>
    <title>Modalidad</title>
</head>

<body>
    <?php
    require_once(VIEW_PATH . 'navbar/navbar.php');
    ?>
    <section class="intro">
        <div class="container">
            <div class="mb-3"></div>
            <div class="mb-3">
                <a href="create.php" class="btn btn-outline-primary">Agregar</a>
                <!-- <a href="javascript:imprimirWindow('ventana')" class="btn btn-info">Imprimir</a> -->
                <!-- <a href="pdf/modalidad.php" target="_blank" class="btn btn-info">Imprimir</a> -->
            </div>
            <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height:700px;">
                <table id="myTabla" class="table table-striped mb-0">
                    <thead style="background-color: #002d72;">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">MODALIDAD</th>
                            <th scope="col">COSTO</th>
                            <th scope="col">INSTRUCTOR</th>
                            <th scope="col">OPERACIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ((array) $rows as $row) { ?>
                            <tr>
                                <td><?= $row['idModalidad'] ?></td>
                                <td><?= $row['nombre_modalidad'] ?></td>
                                <td><?= $row['costo'] ?></td>
                                <td><?= $row['nombre'] ?><?= $row['apellido'] ?></td>
                                <td>
                                    <a class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#idver<?= $row['idModalidad'] ?>">Ver</a>
                                    
                                    <a class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#iddel<?= $row['idModalidad'] ?>">Eliminar</a>

                                    <!-- modal para ver y del -->
                                    <?php
                                    include('viewModal.php');
                                    include('deleteModal.php');
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- div area de impresion -->
    <div class="container" id="ventana" style="display:none;">
        <div class="mb-3">
            <h2 style="font-size: 3.00rem;">Listado de modalidad</h2>
        </div>
        <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height:700px;">
            <table class="table table-striped mb-0" style="font-size: 2.00rem;">
                <thead>
                    <tr>
                        <th colspan="1" scope="col">ID</th>
                        <th colspan="2" scope="col">MODALIDAD</th>
                        <th colspan="3" scope="col">COSTO</th>
                        <th colspan="4" scope="col">INSTRUCTOR</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td colspan="1"><?= $row['idModalidad'] ?></td>
                            <td colspan="2"><?= $row['nombre_modalidad'] ?></td>
                            <td colspan="3"><?= $row['costo'] ?></td>
                            <td colspan="4"><?= $row['nombre'] ?><?= $row['apellido'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- fin area de impresion -->
</body>
<?php include_once(ROOT_PATH . 'footer.php')  ?>
<script>
    $(document).ready(function() {
        //$('#myTabla').DataTable();
        var table = new DataTable('#myTabla', {
            language: {
                url: '../../assets/js/es-ES.json',
            },
            'paging': true,
            lengthMenu: [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, 'Todos']
            ]
        });
    });
</script>

</html>