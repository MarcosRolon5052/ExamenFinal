<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/sistemagym/routes.php');

    require_once(CONTROLLER_PATH.'modalidadController.php');
    $object = new modalidadController();

    $idModalidad = $_REQUEST['idModalidad'];
    $nombre_modalidad = $_REQUEST['nombre_modalidad'];
    $costo = $_REQUEST['costo'];
    $idInstructor = $_REQUEST['idInstructor'];
    
    $registro = $object->insert($idModalidad,$nombre_modalidad,$costo,$idInstructor);   
?>
<!-- <script>
    history.replaceState(null,null,location.pathname);
</script> -->