<?php
    class permisosController{
        private $model;
        
        public function __construct() {
            include_once ($_SERVER['DOCUMENT_ROOT'].'/sistemagym/routes.php');
            require_once(MODEL_PATH.'permisosModel.php');
            $this->model = new permisosModel();
        }

        public function select($usuario,$clave){
            return ($this->model->buscar($usuario) != false) ? $this->model->buscar($usuario) : false;
        }

    }
?>