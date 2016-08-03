<?php 

/**
* 
*/

defined("APPPATH") OR die("Access denied");
 
class IndexController extends ControladorBase{ 
    public $conectar;
    public $adapter;
     
    public function __construct() {
        parent::__construct();
          
        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }



	public function pagding(){
		//Load Header
        require_once '../app/views/shared/header.php';
        
        //Load Nav
        require_once '../app/views/shared/navigation.php';
        //Landig page
         require_once '../app/views/index/landing_page.php';
        
        //Load Footer
        require_once '../app/views/shared/footer.php';
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
            $this->views("landing_page.php",array( "sliderList"=>$sliderList),'Index/');

        } catch(Exception $e){
            echo 'Message: ' .$e->getMessage();
        }

        
    }

    public function lecture(){
        //Load Header
        require_once '../app/views/shared/header.php';
        
        //Load Nav
        require_once '../app/views/shared/navigation.php';
        //Landig page
         require_once '../app/views/index/comments.php';
        
        //Load Footer
        require_once '../app/views/shared/footer.php';
    }

}
 ?>