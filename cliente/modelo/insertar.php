<?php
include_once('conexion.php');
class insertar extends coneccion{
    private $consulta;
    public $query;

    public function insertarCompra($tipo_cuenta,$nombre_titular,$numero_cuenta,$codigo_cvc,$usuarioid,$viajesid,$cd,$nombre_pasajero,$apellidos_pasajero,$asiento){
        $this->consulta="INSERT INTO boleto(tipo_cuenta,nombre_titular,numero_cuenta,codigo_cvc,fecha_compra,usuarioid,viajesid) VALUES ($tipo_cuenta,'$nombre_titular',$numero_cuenta,$codigo_cvc,CURRENT_DATE,$usuarioid,$viajesid)";
        $this->query=pg_query($this->conex,$this->consulta);
        if($this->query){

            $consultaultimo="SELECT MAX(boletoid) ultimo FROM boleto ";
            $this->query=pg_query($this->conex,$consultaultimo);
            $ultimoarray=pg_fetch_array($this->query);
            $ultimoid=intval($ultimoarray['ultimo']);
            if($this->query){
                $this->consulta="INSERT INTO pasajero VALUES ($cd,'$nombre_pasajero','$apellidos_pasajero',$asiento,$ultimoid)";
                $this->query=pg_query($this->conex,$this->consulta);
            }
        
                
        }
        
       


    }

}
?>