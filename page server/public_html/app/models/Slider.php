<?php 

/**
* 
*/
class Slider extends EntidadBase
{
	
	public function __construct($adapter) {
        $table="slider";
        parent::__construct($table, $adapter);
    }

    //Metodos de consulta
    public function getSliderAll(){

    	$sliderList=$this->getBy('estado',1);

    	$this->getCerrarConexion();
        //var_dump($sliderList);     
        return $sliderList;
    
    }

    

}


 ?>