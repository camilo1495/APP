<?php 
class BD{

    public static $instancia=null;
    public static function crearInstancia(){

        if( !isset(self::$instancia)){

    $opcionesPDO[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
    self::$instancia=new PDO('mysql:host=localhost;dbname=aplicacion','root','',$opcionesPDO);

    }
        
        return self::$instancia;

    }

}

?>