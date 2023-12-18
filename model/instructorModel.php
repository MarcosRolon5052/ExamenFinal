<?php
    class instructorModel {
        private $PDO;
        
        public function __construct(){
            include_once ($_SERVER['DOCUMENT_ROOT'].'/sistemagym/routes.php');
            require_once(DAO_PATH.'database.php');
            $data = new dataConex();
            $this->PDO = $data->conexion();
        }

        public function insertar($idInstructor,$nombre,$apellido,$telefono,$email,$direccion) {
            $sql = 'INSERT INTO instructores VALUES (:idInstructor,:nombre,:apellido,:telefono,:email,:direccion)';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':idInstructor',$idInstructor);
            $statement->bindParam(':nombre',$nombre);
            $statement->bindParam(':apellido',$apellido);
            $statement->bindParam(':telefono',$telefono);
            $statement->bindParam(':email',$email);
            $statement->bindParam(':direccion',$direccion);
            $statement->execute();
            return ($this->PDO->lastInsertId());
        }

        public function actualizar($idInstructor,$nombre,$apellido,$telefono,$email,$direccion) {
            $sql = 'UPDATE instructores SET nombre=:nombre,apellido=:apellido,telefono=:telefono,email=:email, direccion=:direccion WHERE idInstructor=:idInstructor';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':nombre',$nombre);
            $statement->bindParam(':apellido',$apellido);
            $statement->bindParam(':telefono',$telefono);
            $statement->bindParam(':email',$email);
            $statement->bindParam(':direccion',$direccion);
            $statement->bindParam(':idInstructor',$idInstructor);
            return ($statement->execute()) ? true : false;
        }

        public function eliminar($idInstructor) {
                $sql = 'DELETE FROM instructores WHERE idInstructor=:idInstructor';
                $statement = $this->PDO->prepare($sql);
                $statement->bindParam(':idInstructor',$idInstructor);
                return ($statement->execute()) ? true : false;
        }
        public function listar() {
            $sql = 'SELECT * FROM instructores';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }
        

        public function buscar($idInstructor) {
            $sql = 'SELECT idInstructor,nombre,apellido,telefono,email,direccion FROM instructores WHERE idInstructor = :idInstructor';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':idInstructor',$idInstructor);
            return ($statement->execute()) ? $statement->fetch() : false;
        }

        public function ultimo(){
            $sql = 'SELECT * FROM instructores ORDER BY idInstructor DESC LIMIT 1';
            $statement = $this ->PDO -> prepare($sql);
            return ($statement->execute()) ? $statement->fetch() : false;
        }
}
?>