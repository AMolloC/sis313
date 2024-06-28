<?php

    class model{
        public $view;
        public $db;

        function __construct(){
            $this->db = new database();
            $this->view = new view();;
        }    
    }

?>