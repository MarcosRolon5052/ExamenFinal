<?php
    class modalidadModel {
        private $PDO;
        
        public function __construct(){
            include_once ($_SERVER['DOCUMENT_ROOT'].'/sistemagym/routes.php');
            require_once(DAO_PATH.'database.php');
            $data = new dataConex();
            $this->PDO = $data->conexion();
        }

        public function insertar($idModalidad,$nombre_modalidad,$costo,$idInstructor) {
            $sql = 'INSERT INTO modalidad VALUES (:idModalidad,:nombre_modalidad,:costo,:idInstructor)';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':idModalidad',$idModalidad);
            $statement->bindParam(':nombre_modalidad',$nombre_modalidad);
            $statement->bindParam(':costo',$costo);
            $statement->bindParam(':idInstructor',$idInstructor);
            $statement->execute();
            return ($this->PDO->lastInsertId());
        }

        public function actualizar($idModalidad,$nombre_modalidad,$costo,$idInstructor) {
            $sql = 'UPDATE modalidad SET nombre_modalidad=:nombre_modalidad,costo=:costo,idInstructor=:idInstructor WHERE idModalidad=:idModalidad';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':nombre_modalidad',$nombre_modalidad);
            $statement->bindParam(':costo',$costo);
            $statement->bindParam(':idInstructor',$idInstructor);
            $statement->bindParam(':idModalidad',$idModalidad);
            return ($statement->execute()) ? true : false;
        }

        public function eliminar($idModalidad) {
                $sql = 'DELETE FROM modalidad WHERE idModalidad=:idModalidad';
                $statement = $this->PDO->prepare($sql);
                $statement->bindParam(':idModalidad',$idModalidad);
                return ($statement->execute()) ? true : false;
        }
        public function listar() {
            $sql = 'SELECT m.idModalidad,m.nombre_modalidad,m.costo,i.nombre FROM modalidad m JOIN instructores i ON m.idInstructor = i.idInstructor ORDER BY idModalidad DESC';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }
        
        public function cargarDesplegable() {
            $sql = 'SELECT idInstructor, nombre, apellido FROM instructores ORDER BY idInstructor ASC';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

        public function buscar($idModalidad) {
            $sql = 'SELECT m.idModalidad,m.modalidad,m.costo,m.idInstructor,m.cin,i.modalidad ciudad FROM modalidad e JOIN instructores c ON m.idInstructor = i.idInstructor WHERE idModalidad = :idModalidad';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':idModalidad',$idModalidad);
            return ($statement->execute()) ? $statement->fetch() : false;
        }
        public function ultimo(){
            $sql = 'SELECT * FROM modalidad ORDER BY idModalidad DESC LIMIT 1';
            $statement = $this ->PDO -> prepare($sql);
            return ($statement->execute()) ? $statement->fetch() : false;
        }
}
?>