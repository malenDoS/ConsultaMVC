<?php
class Productos_modelo{
    
    private $conexionBaseDatos;
    private $productos;
    public function __construct(){
        require_once("conectar.php");
        $this->conexionBaseDatos=Conectar::conexion();
        $this->productos=array();
    }
    
    
    public function get_productos(){
        $consultasql="SELECT * FROM articulosexportado";
        $conexionConsulta=$this->conexionBaseDatos->query($consultasql);
        while($filas=$conexionConsulta->fetch(PDO::FETCH_ASSOC)){
            $this->productos[]=$filas;
        }
        return $this->productos;
    }
    
    
}
?>