<?php

    class view{
        function __construct(){}    

        function render($nombre){
            require 'views/' . $nombre . '.php';
        }
    }

?>