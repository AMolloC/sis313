<?php

require_once 'controllers/_error_.php';

    class App{
        function __construct(){
            $url = isset($_GET['url'])? $_GET['url']: null;
            $url = rtrim($url, '/');
            $url = explode('/', $url);

            if(empty($url[0])){
                $archivoController = 'controllers/index.php';
                require_once $archivoController;
                $controller = new index();
                $controller->loadModel($url[0]);
                return false;
            }

            $archivoController = 'controllers/' . $url[0] . '.php';

            if(file_exists($archivoController)){
                require_once $archivoController;
                $controller = new $url[0];
                if(isset($url[1])){
                    $controller->loadModel($url[0]);
                    $controller->{$url[1]}();
                }
            }else{
                $controller = new _error_();
            }
        }
    }
?>