<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    class permisosModel {
        private $PDO;
        
        public function __construct(){
            include_once ($_SERVER['DOCUMENT_ROOT'].'/sistemagym/routes.php');
            require_once(DAO_PATH.'database.php');
            $data = new dataConex();
            $this->PDO = $data->conexion();
        }

        public function listar($usuario){
            $sql = 'SELECT u.id_usuario, u.alias, u.email,u.password, r.tipo_rol 
            FROM usuarios AS u 
            JOIN usuarios_roles AS ur ON u.id_usuario = ur.id_usuario_usuarios 
            JOIN roles r ON ur.id_rol_roles = r.id_rol 
            WHERE u.alias = :usuario';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':usuario',$usuario); 
            return ($statement->execute()) ? $statement->fetch() : false;
        }
    }
?>