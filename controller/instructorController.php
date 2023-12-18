<?php
    class instructorController{
        private $model;
        
        public function __construct() {
            include_once ($_SERVER['DOCUMENT_ROOT'].'/sistemagym/routes.php');
            require_once(MODEL_PATH.'instructorModel.php');
            $this->model = new instructorModel();
        }
       
        public function insert($idInstructor,$nombre,$apellido,$telefono,$email,$direccion){
            $id = $this->model->insertar($idInstructor,$nombre,$apellido,$telefono,$email,$direccion);
            return ($id!=false) ? header('location: ./index.php') : header('location: ./create.php');
        }
        
        public function update($idInstructor,$nombre,$apellido,$telefono,$email,$direccion){
            return ($this->model->actualizar($idInstructor,$nombre,$apellido,$telefono,$email,$direccion) != false) ? header('location: ./index.php') : header('location: ./edit.php?idInstructor='.$idInstructor);
        }
        
        public function delete($idInstructor){
            return ($this->model->eliminar($idInstructor)) ? header('location: ./index.php') : header('location: ./index.php') ;
        }
        
        public function search($idInstructor){
            return ($this->model->buscar($idInstructor) != false) ? $this->model->buscar($idInstructor) : header('location: ./index.php');
        }

        public function select(){
            return ($this->model->listar()) ? $this->model->listar() : false;
        }

        public function last(){
            return ($this->model->ultimo()) ? $this->model->ultimo() : false;
        }
        
    }
?>