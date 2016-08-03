<?php
//Configuración global
require_once 'config/global.php';
 
//Base para los controladores
require_once 'core/ControladorBase.php';
 
//Funciones para el controlador frontal
require_once 'core/ControllerFrontend.func.php';
 
//Cargamos controladores y acciones
if(isset($_GET["controller"])){
    $controllerObj=loadController($_GET["controller"]);
    sendAction($controllerObj);
}else{
    $controllerObj=loadController(DEFAULT_CONTROLLER);
    sendAction($controllerObj);
}
?>
