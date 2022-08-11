<?php
class conexion{
    private $host='localhost';
    private $port=5432;
    private $base='crush';
    private $user='postgres';
    private $pass='Juventud123';
    public $conex;
    public function __construct()
    {
        $this->conex=pg_connect("host=$this->host port=$this->port dbname=$this->base user=$this->user password=$this->pass");
    }
}
?>