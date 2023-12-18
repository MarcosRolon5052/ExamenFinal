<?php
   session_start();
   error_reporting(E_ALL);
   ini_set('display_errors', 1);
   
   $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : null;
   $clave = (isset($_POST['clave'])) ? $_POST['clave'] : null;
   
   include_once ($_SERVER['DOCUMENT_ROOT'].'/sistemagym/routes.php');
   require_once(CONTROLLER_PATH.'usuarioController.php');
   $object = new usuarioController();
   $resultado = $object->search($usuario);
 
   $data = 'null';
   $clave_db = $resultado['password'];

    if ($resultado && password_verify($clave, $clave_db)) {
        $_SESSION["id_usuario"] = $resultado['id_usuario'];
        $_SESSION["usuario"] = $resultado['alias'];
        $_SESSION["tipo_rol"] = $resultado['tipo_rol'];
        $data = $resultado['tipo_rol'];
    } else {
        $_SESSION["id_usuario"] = null;
        $_SESSION["usuario"] = null;
        $_SESSION["tipo_rol"] =null;
    }
    echo ($data);
    exit();
?>