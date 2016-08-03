<?php
defined("APPPATH") OR die("Access denied");
class UserController extends ControladorBase{
    public $conectar;
    public $adapter;
     
    public function __construct() {
        parent::__construct();
          
        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();

     } 
    public function index(){
        try{

            
            //Creamos el objeto usuario
           
           $usuario=new User($this->adapter);
             
            //Conseguimos todos los usuarios
            $allusers=$usuario->getAll();
     
            //Producto
            /*$producto=new Producto($this->adapter);
            $allproducts=$producto->getAll();*/
            
            //Cargamos la vista index y le pasamos valores
           $this->view("index",array(
               "allusers"=>$allusers,
               "Hola"    =>"Soy Víctor Robles"
            ));

        } catch(Exception $e){
            echo 'Message: ' .$e->getMessage();
        }

        
    }
     
    public function crear(){
        if(isset($_POST["nombre"])){
             
            //Creamos un usuario
            $usuario=new User($this->adapter);
            $usuario->setNombre($_POST["nombre"]);
            $usuario->setApellido($_POST["apellido"]);
            $usuario->setEmail($_POST["email"]);
            $usuario->setPassword(sha1($_POST["password"]));
            $save=$usuario->save();
        }
        $this->redirect("User", "index");
    }
     
    public function borrar(){
        if(isset($_GET["id"])){ 
            $id=(int)$_GET["id"];
             
            $usuario=new User($this->adapter);
            $usuario->deleteById($id); 
        }
        $this->redirect('User','index');
    }
     
     
    public function hola(){
        $usuarios=new UserModel($this->adapter);
        $usu=$usuarios->getUnUsuario();
        var_dump($usu);
    }

    public function test(){

        echo "hola";
    }
 
}
?>
