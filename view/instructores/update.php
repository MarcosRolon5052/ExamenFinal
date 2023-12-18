<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/sistemagym/routes.php');
    
    require_once(CONTROLLER_PATH.'instructorController.php');
    $object = new instructorController();

    $idInstructor = $_REQUEST['idInstructor'];
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $telefono = $_REQUEST['telefono'];
    $email = $_REQUEST['email'];
    $direccion = $_REQUEST['direccion'];
    
    $object->update($idInstructor,$nombre,$apellido,$telefono,$email,$direccion);
?>
<!-- <script>
    history.replaceState(null,null,location.pathname);
</script> -->