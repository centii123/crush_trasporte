<?php
class coneccion{
    private $host='localhost';
    private $port=5432;
    private $base='crush';
    private $user='postgres';
    private $pass= 'Juventud123';
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

class ver extends coneccion{

    public $consulta;
    public $query;
    public function provincias(){
    $this->consulta="SELECT * FROM provincia";
    $this->query=pg_query($this->conex,$this->consulta);
    return $this->query;
}
}

class catalogo extends coneccion{
    public $consulta;
    public $query;

    public function tajetas($salida,$llegada,$estados){
        $this->consulta="SELECT viajes.viajesid,viajes.fotoviaje,viajes.fechaviaje,viajes.costoviaje,viajes.placab,viajes.estadosid,salida.descripcion provinciasalida,llegada.descripcion provinciallegada FROM viajes INNER JOIN provincia salida ON salida.provinciaid=viajes.provinciasalida INNER JOIN provincia llegada ON llegada.provinciaid=viajes.provinciallegada WHERE salida.provinciaid = $salida OR llegada.provinciaid = $llegada OR viajes.estadosid = $estados";// cambiar aqui primero en postgres 
        $this->query=pg_query($this->conex,$this->consulta);// donde y que voy a consultar 
        return $this->query;
    }
    


}
class buscar extends coneccion{
    public $consulta;
    public $query;
    public function buscar(){
        $this->consulta="SELECT * FROM provincia";
        $this->query=pg_query($this->conex,$this->consulta);
        return $this->query;
    }
}

class mis_viajes extends coneccion{
    public $consulta;
    public $query;
    public function misViajes($idusuario){
        $this->consulta="SELECT pa.cedulap,pa.nombres nombrespasajero,pa.apellidos apellidospasajero,pa.asiento,b.*,us.*,vi.*,llegada.provinciaid llegadaid,llegada.descripcion llegada,salida.provinciaid idsalida,salida.descripcion salida FROM pasajero pa inner join boleto b on pa.boletoid=b.boletoid INNER JOIN usuario us on b.usuarioid=us.usuarioid INNER JOIN viajes vi on b.viajesid=vi.viajesid INNER JOIN provincia salida on salida.provinciaid= vi.provinciasalida INNER JOIN provincia llegada on llegada.provinciaid= vi.provinciallegada Where us.usuarioid=$idusuario AND vi.estadosid=1 or vi.estadosid=3";
        $this->query=pg_query($this->conex,$this->consulta);
        return $this->query;
    }
    
}


?>