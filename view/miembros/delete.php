<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/sistemagym/routes.php');

    require_once(CONTROLLER_PATH.'instructorController.php');
    $object = new instructorController();

    $idInstructor = $_REQUEST['id'];  
    $object->delete($idInstructor);  
?>