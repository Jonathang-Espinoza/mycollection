<?php
/*
*tiene las funciones que se encargan de cargar un controlador u otro y una acción u otra en función de lo que se le diga por la url.
 */
//FUNCIONES PARA EL CONTROLADOR FRONTAL
 
function loadController($controller){
    $controlador=ucwords($controller).'Controller';
    $strFileController='../app/controllers/'.$controlador.'.php';
    echo $controller;
    if(!is_file($strFileController)){
        $strFileController='../app/controllers/'.ucwords(DEFAULT_CONTROLLER).'Controller.php';   
    }

         
    require_once $strFileController;
    $controllerObj=new $controlador();
    return $controllerObj;
}
 
function loadAction($controllerObj,$action){
    $accion=$action;
    $controllerObj->$accion();
}
 
function sendAction($controllerObj){
    //echo 'Accion'.$_GET["action"] .'Controlador:'. $controllerObj;
    if(isset($_GET["action"]) && method_exists($controllerObj, $_GET["action"])){
        loadAction($controllerObj, $_GET["action"]);
    }else{
        loadAction($controllerObj, DEFAULT_ACTION);
    }
}
 
?>
