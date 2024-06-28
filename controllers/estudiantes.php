<?php

    class estudiantes extends controller{
        function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->model->ObtenerEstudiantes();
        }
    
        public function create(){
            $this->view->render('Estudiantes/create');
        }
    
        public function edit(){
            $this->view->render('Estudiantes/edit');
        }
    
        public function update(){
            $this->view->render('Estudiantes/update');
        }
    
        public function delete(){
            $this->view->render('Estudiantes/delete');
        }

    }
?>