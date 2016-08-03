<?php
class Conectar{
    private $driver;
    private $host, $user, $pass, $database, $charset;
   
    public function __construct() {
        $db_cfg = require_once '../app/config/database.php';
        $this->driver=$db_cfg["driver"];
        $this->host=$db_cfg["host"];
        $this->user=$db_cfg["user"];
        $this->pass=$db_cfg["pass"];
        $this->database=$db_cfg["database"];
        $this->charset=$db_cfg["charset"];
    }
     
    public function conexion(){
      
        if($this->driver=="mysql" || $this->driver==null){
            /*$con=new mysqli($this->host, $this->user, $this->pass, $this->database);*/
            $con=@mysqli_connect($this->host, $this->user, $this->pass, $this->database);  
            /*$con->query("SET NAMES '".$this->charset."'");*/
        }
          $con=@mysqli_connect($this->host, $this->user, $this->pass, $this->database);  
        return $con;

       
    }

    public function cerrarConexion($cn)
    {
       return 1; //$cn->close();
    }
  
     
     public function getConexionMySqli(){
         # conectare la base de datos
        $con=@mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        if(!$con){
            die("imposible conectarse: ".mysqli_error($con));
        }
        if (@mysqli_connect_errno()) {
            die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
        }
        return $con;
     }
    public function startFluent(){
        require_once "FluentPDO/FluentPDO.php";
         var_dump($this->driver);
        if($this->driver=="mysql" || $this->driver==null){
            $pdo = new PDO($this->driver.":dbname=".$this->database, $this->user, $this->pass);
            $fpdo = new FluentPDO($pdo);
        }
         
        return $fpdo;
    }

    public  function getConexionPDO() {
      try
        {
            $cn = new PDO("mysql:dbname=".$this->database.";host=".$this->host.",user=".$this->user.",password=".$this->pass);
            $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch( PDOException $e)
        {
             echo "Error Connection: " . $e->getMessage();
        }
              
      
      return $con;
    }

}
?>
