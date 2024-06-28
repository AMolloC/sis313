<?php

class _error_ extends controller{
    function __construct(){
        parent::__construct();
        $this->view->render('Error/index');
    }
}

?>
