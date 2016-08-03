<?php 
/*esta clase heredarán los modelos que representen entidades, en el constructor le pasaremos el nombre de la tabla y tendremos tantos métodos 
  como queramos para ayudarnos con las peticiones a la BD a través de los objetos que iremos creando. Lo bueno que tiene es que estos métodos pueden
 ser reutilizados en otras clases ya que le indicamos la tabla en el constructor.
 */
class EntidadBase{
    private $table;
    private $db;
    private $conectar;
 
    public function __construct($table, $adapter) {
        $this->table=(string) $table;
         
        /*
        require_once 'Conectar.php';
        $this->conectar=new Conectar();
        $this->db=$this->conectar->conexion();
         */
        $this->conectar = null;
        $this->db = $adapter;
    }

     
    public function getConetar(){
        return $this->conectar;
    }
    

    public function getCerrarConexion(){
        try{
            $this->db->close();
            return "ok";
        
        } catch(Exception $e){
             return $e->getMessage();
        }
        
    }
     
    public function db(){
        return $this->db;
    }
     
    public function getAll(){
      
        $resultSet=null;
        $query= $this->db->query("SELECT * FROM $this->table ORDER BY id DESC");
          
        //Devolvemos el resultset en forma de array de objetos
        while ($row = $query->fetch_object()) {
           $resultSet[]=$row;
        }
         
        return $resultSet;
    }
     
    public function getById($id){
        $query=$this->db->query("SELECT * FROM $this->table WHERE id=$id");
 
        if($row = $query->fetch_object()) {
           $resultSet=$row;
        }
         
        return $resultSet;
    }
     
    public function getBy($column,$value){
        $query=$this->db->query("SELECT * FROM $this->table WHERE $column='$value'");
 
        while($row = $query->fetch_object()) {
           $resultSet[]=$row;
        }
         
        return $resultSet;
    }
     
    public function deleteById($id){
        $query=$this->db->query("DELETE FROM $this->table WHERE id=$id"); 
        return $query;
    }
     
    public function deleteBy($column,$value){
        $query=$this->db->query("DELETE FROM $this->table WHERE $column='$value'"); 
        return $query;
    }
     
 
    /*
     * Aquí podemos montarnos un montón de métodos que nos ayuden
     * a hacer operaciones con la base de datos de la entidad
     */
     
}


 ?>