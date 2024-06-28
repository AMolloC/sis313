<?php

class estudiantesmodel extends model{
    public function __construct(){
        parent::__construct();
    }

    public function ObtenerEstudiantes(){
        // Consultas de la base de datos
        $this->view->render("Estudiantes/index");
    }

    public function AgregarEstudiantes(){
        // Consultas de la base de datos
        $this->view->render('Estudiantes/index');
    }

    public function ActualizarEstudiantes(){
        // Consultas de la base de datos
        $this->view->render('Estudiantes/index');
    }

    public function EliminarEstudiantes(){
        // Consultas de la base de datos
        $this->view->render('Estudiantes/index');
    }
}

?>