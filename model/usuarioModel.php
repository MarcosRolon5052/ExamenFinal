<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    class usuarioModel {
        private $PDO;
        
        public function __construct(){
            include_once ($_SERVER['DOCUMENT_ROOT'].'/sistemagym/routes.php');
            require_once(DAO_PATH.'database.php');
            $data = new dataConex();
            $this->PDO = $data->conexion();
        }

        public function insertar($alias,$email,$password) {
            $sql = 'INSERT INTO usuario VALUES (0,:alias,:email,:password)';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':alias',$alias);
            $statement->bindParam(':email',$email);
            $statement->bindParam(':password',$password);
            $statement->execute();
            return ($this->PDO->lastInsertId());
        }

        public function listar() {
            $sql = 'SELECT * FROM usuarios ORDER BY id_usuario';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }        

        public function buscar($usuario) {
            $sql = 'SELECT u.id_usuario, u.alias, u.email, u.password, r.tipo_rol 
            FROM usuarios AS u JOIN usuarios_roles AS ur 
            ON u.id_usuario = ur.id_usuario_usuarios 
            JOIN roles r ON ur.id_rol_roles = r.id_rol 
            WHERE u.alias = :usuario';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':usuario',$usuario);        
            return ($statement->execute()) ? $statement->fetch() : false;
        }        

    }
?>