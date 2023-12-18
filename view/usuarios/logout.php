<?php
    session_start();
    unset($_SESSION["id_usuario"]);
    unset($_SESSION["alias"]);
    unset($_SESSION["tipo_rol"]);
    session_destroy();
    header("location: /sistemagym/view/usuarios/login.php");
?> 