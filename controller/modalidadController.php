<?php
    class modalidadController{
        private $model;
        
        public function __construct() {
            include_once ($_SERVER['DOCUMENT_ROOT'].'/sistemagym/routes.php');
            require_once(MODEL_PATH.'modalidadModel.php');
            $this->model = new modalidadModel();
        }
       
        public function insert($idModalidad,$nombre_modalidad,$costo,$idInstructor){
            $id = $this->model->insertar($idModalidad,$nombre_modalidad,$costo,$idInstructor);
            return ($id!=false) ? header('location: ./index.php') : header('location: ./create.php');
        }
        
        public function update($idModalidad,$nombre_modalidad,$costo,$idInstructor){
            return ($this->model->actualizar($idModalidad,$nombre_modalidad,$costo,$idInstructor) != false) ? header('location: ./index.php') : header('location: ./edit.php?idModalidad='.$idModalidad);
        }
        
        public function delete($idModalidad){
            return ($this->model->eliminar($idModalidad)) ? header('location: ./index.php') : header('location: ./index.php') ;
        }
        
        public function search($idModalidad){
            return ($this->model->buscar($idModalidad) != false) ? $this->model->buscar($idModalidad) : header('location: ./index.php');
        }

        public function select(){
            return ($this->model->listar()) ? $this->model->listar() : false;
        }

        public function combolist(){
            return ($this->model->cargarDesplegable()) ? $this->model->cargarDesplegable() : false;
        }

        public function last(){
            return ($this->model->ultimo()) ? $this->model->ultimo() : false;
        }
        
    }
?>