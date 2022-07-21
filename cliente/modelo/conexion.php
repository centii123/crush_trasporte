<?php
class coneccion{
    private $host='localhost';
    private $port=5432;
    private $base='crush';
    private $user='postgres';
    private $pass=123;
    public $conex;
    public function __construct()
    {
        $this->conex=pg_connect("host=$this->host port=$this->port dbname=$this->base user=$this->user password=$this->pass");
    }
    /*public function con(){
       return $this->conex;
    }*/
}
/*$conec= new coneccion();

$comprobacion=$conec->con();

if($comprobacion){
    echo 'si';
}else{
    echo 'no';
}*/

class catalogo extends coneccion{
    public $consulta;
    public $query;

    public function tajetas(){
        $this->consulta="SELECT * FROM viajes ";// cambiar aqui primero en postgres 
        $this->query=pg_query($this->conex,$this->consulta);// donde y que voy a consultar 
        return $this->query;
    }

}


?>