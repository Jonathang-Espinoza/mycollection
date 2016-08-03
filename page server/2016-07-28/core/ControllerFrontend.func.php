<?php
/*
*tiene las funciones que se encargan de cargar un controlador u otro y una acción u otra en función de lo que se le diga por la url.
 */
//FUNCIONES PARA EL CONTROLADOR FRONTAL
 
function loadController($controller){
    $controlador=ucwords($controller).'Controller';
    $strFileController='../app/controllers/'.$controlador.'.php';
    //echo  '<br>';
    //echo  $strFileController .'<br>';
    if(!is_file($strFileController)){
        $strFileController='../app/controllers/'.ucwords(DEFAULT_CONTROLLER).'Controller.php';   
    }
    /*echo !class_exists($strFileController);

    if (!class_exists($strFileController)) {
        $controlador=ucwords(DEFAULT_CONTROLLER).'Controller';
        $strFileController='../app/controllers/'.$controlador.'.php';

    }
     echo 'nuevo'.$controller .$strFileController;*/
     require_once $strFileController;
     $controllerObj=new $controlador();
     return $controllerObj;

    
}
 
function loadAction($controllerObj,$action,$params){
    $accion=$action;
    $controllerObj->parametrosprobar=$params;
    $controllerObj->$accion($params);
    
}
 
function sendAction($controllerObj,$params){
    //echo 'Accion'.$_GET["action"] .'Controlador:'. $controllerObj;
    if(isset($_GET["action"]) && method_exists($controllerObj, $_GET["action"])){
        loadAction($controllerObj, $_GET["action"],$params);
    }else{
        loadAction($controllerObj, DEFAULT_ACTION,$params);
    }
}
 
?>
