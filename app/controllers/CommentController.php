<?php 

/**
* Permite brindar mantenimientos a los comentarios, relacionados con la pagina
*/
defined("APPPATH") OR die("Access denied");
class CommentController extends ControladorBase
{
	public $conectar;
    public $adapter;
	function __construct()
	{
		parent::__construct();
          
        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
	}

	 public function index(){
        try{

            //Creamos el objeto Slider
            $slider=new Slider($this->adapter);
             
            //Conseguimos todos los usuarios
            $sliderList=$slider->getSliderAll();
            //var_dump($sliderList);
     
            //Producto
            /*$producto=new Producto($this->adapter);
            $allproducts=$producto->getAll();*/
            
            //Cargamos la vista index y le pasamos valores
            $this->views("comments.php",array( "sliderList"=>$sliderList),'comment/');

        } catch(Exception $e){
            echo 'Message: ' .$e->getMessage();
        }

        
    }
    public function crear(){
        if(isset($_POST["comment"])){
             
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

}
 ?>