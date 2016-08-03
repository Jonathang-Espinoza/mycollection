<?php
/*ControladoresBase de la cual heredarán los controladores, esta clase carga EntidadesBase, ModelosBase, y todos los modelos creados dentro del directorio model.*/



class ControladorBase{

    public $parametrosprobar;
 
    public function __construct() {
        require_once 'Conectar.php';
        require_once 'EntidadBase.php';
        require_once 'ModeloBase.php';
         
        //Incluir todos los modelos
        foreach(glob("../app/models/*.php") as $file){
            require_once $file;
        }

    }
     
    //Plugins y funcionalidades
     
    /*
    * Este método lo que hace es recibir los datos del controlador en forma de array
    * los recorre y crea una variable dinámica con el indice asociativo y le da el 
    * valor que contiene dicha posición del array, luego carga los helpers para las
    * vistas y carga la vista que le llega como parámetro. En resumen un método para
    * renderizar vistas.
    */
    public function view($vista,$datos){
        foreach ($datos as $id_assoc => $valor) {
            ${$id_assoc}=$valor; 
        }
         
        require_once '../core/ViewHelper.php';
        $helper=new ViewHelper();
     
        require_once '../app/views/'.$vista.'View.php';
    }
     
      public function views($vista,$datos,$appPath){
        foreach ($datos as $id_assoc => $valor) {
            ${$id_assoc}=$valor; 
        }
         
        require_once '../core/ViewHelper.php';
        $helper=new ViewHelper();
        //echo "url:" .'../app/views/'.$appPath.$vista;
        require_once '../app/views/'.$appPath.$vista;
    }

    public function redirect($controlador=DEFAULT_CONTROLLER,$accion=DEFAULT_ACTION){
        header("Location:index.php?controller=".$controlador."&action=".$accion);
    }
     
    //Métodos para los controladores
 
}
?>
