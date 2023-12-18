<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/sistemagym/routes.php');

    require_once(CONTROLLER_PATH.'modalidadController.php');
    $object = new modalidadController();

    $idModalidad = $_REQUEST['id'];  
    $object->delete($idModalidad);  
?>