<?php
class conexion{
     public $conex;
     public function __construct(){
        $this->conex = pg_connect('host=localhost port=5432 dbname=crush user=postgres password=Juventud123');
     }
     public function hola(){
        return $this->conex;
     }
}



?>