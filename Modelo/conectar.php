<?php

class Conectar{
    
    
    public static function conexion(){
        try{
        $conexion=New PDO("mysql:host=localhost; dbname=articulos","root","nloeig31416");
        $conexion->exec("SET CHARACTER SET utf8");
        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(Exception $e){
            die("Revisa la conexión".$e->getMessage());
            echo"Linia de la excepción ".$e->getLine();
        }
        return $conexion;
    }
}
?>
