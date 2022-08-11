<?php

include('../../basedatos/basedatos.php');

class Consulta extends conexion{

    private $query;
    private $consulta;

    public function catalogo(){
        $this->consulta="SELECT v.viajesid,v.fotoviaje,v.fechaviaje,v.costoviaje,v.placab,salida.descripcion provinciasalida,llegada.descripcion provinciallegada,es.descripcion estadosid FROM viajes v INNER JOIN provincia salida ON v.provinciasalida = salida.provinciaid INNER JOIN provincia llegada ON v.provinciallegada = llegada.provinciaid INNER JOIN estados es ON v.estadosid=es.estadosid";
        $this->query=pg_query($this->conex,$this->consulta);
        return $this->query;
    }

}

?>
