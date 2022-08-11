<?php
require '../../basedatos/basedatos.php';

class ver extends conexion{

    public $consulta;
    public $query;
    public function provincias(){
    $this->consulta="SELECT * FROM provincia";
    $this->query=pg_query($this->conex,$this->consulta);
    return $this->query;
    
    }
    public function verAsientos($id){
        $this->consulta="SELECT pa.cedulap,pa.asiento,pa.boletoid,vi.viajesid,vi.placab FROM pasajero pa INNER JOIN boleto bo ON pa.boletoid = bo.boletoid INNER JOIN viajes vi ON bo.viajesid = vi.viajesid WHERE vi.viajesid= $id";
        $this->query=pg_query($this->conex,$this->consulta);
        return $this->query;
    }
}

class catalogo extends conexion{
    public $consulta;
    public $query;

    public function tajetas($salida,$llegada,$estados){
        $this->consulta="SELECT viajes.viajesid,viajes.fotoviaje,viajes.fechaviaje,viajes.costoviaje,viajes.placab,viajes.estadosid,salida.descripcion provinciasalida,llegada.descripcion provinciallegada FROM viajes INNER JOIN provincia salida ON salida.provinciaid=viajes.provinciasalida INNER JOIN provincia llegada ON llegada.provinciaid=viajes.provinciallegada WHERE salida.provinciaid = $salida OR llegada.provinciaid = $llegada OR viajes.estadosid = $estados";// cambiar aqui primero en postgres 
        $this->query=pg_query($this->conex,$this->consulta);// donde y que voy a consultar 
        return $this->query;
    }
    


}
class buscar extends conexion{
    public $consulta;
    public $query;
    public function buscar(){
        $this->consulta="SELECT * FROM provincia";
        $this->query=pg_query($this->conex,$this->consulta);
        return $this->query;
    }
}

class mis_viajes extends conexion{
    public $consulta;
    public $query;
    public function misViajes($idusuario){
        $this->consulta="SELECT pa.cedulap,pa.nombres nombrespasajero,pa.apellidos apellidospasajero,pa.asiento,b.*,us.*,vi.*,llegada.provinciaid llegadaid,llegada.descripcion llegada,salida.provinciaid idsalida,salida.descripcion salida FROM pasajero pa inner join boleto b on pa.boletoid=b.boletoid INNER JOIN usuario us on b.usuarioid=us.usuarioid INNER JOIN viajes vi on b.viajesid=vi.viajesid INNER JOIN provincia salida on salida.provinciaid= vi.provinciasalida INNER JOIN provincia llegada on llegada.provinciaid= vi.provinciallegada Where us.usuarioid=$idusuario AND vi.estadosid=1 or vi.estadosid=3";
        $this->query=pg_query($this->conex,$this->consulta);
        return $this->query;
    }
    
}
?>