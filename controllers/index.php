<?php

class index extends controller{
    function __construct(){
        parent::__construct();
        $this->view->render('index');
    }
}

?>