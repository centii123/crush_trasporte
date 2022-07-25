<?php

require_once 'baseDatos.php';

class Insertar extends Conexion{
    private $consulta;
    public $query;

    public function busI($id,$modelo,$asientos,$imagen,$estado){
        $this->consulta= "INSERT INTO buses VALUES ('$id','$modelo',$asientos,'$imagen',$estado)";
        $this->query= pg_query($this->conex, $this->consulta);
        
        return $this->query;
    }

    public function personalI($cedula,$nombres,$apellidos,$estado,$imagen,$role){
        $this->consulta= "INSERT INTO empleados VALUES ('$cedula','$nombres','$apellidos',$estado,'$imagen',$role)";
        $this->query= pg_query($this->conex, $this->consulta);
        return $this->query;
    }

    public function viajeI($imagen,$fechaviaje,$costo,$salida,$llegada,$bus,$estadosid,$chofer,$oficial){
        $this->consulta= "INSERT INTO viajes(fotoviaje,fechaviaje,costoviaje,provinciasalida,provinciallegada,placab,estadosid) VALUES ('$imagen','$fechaviaje',$costo,$salida,$llegada,'$bus',$estadosid)";
        $this->query= pg_query($this->conex, $this->consulta);

        if($this->query){
            $numeros="SELECT MAX(viajesid) FROM viajes";
            $query=pg_query($this->conex,$numeros);
            $idviajearr=pg_fetch_array($query);
            $idV=intval($idviajearr['max']) ;

            if($query){
                $ingresar="INSERT INTO viajes_empleados(cedulae,viajesid) VALUES ($chofer,$idV)";
                $query1=pg_query($this->conex,$ingresar);

                if($query1){
                    $ingresar="INSERT INTO viajes_empleados(cedulae,viajesid) VALUES ($oficial,$idV)";
                    $query1=pg_query($this->conex,$ingresar);
                }

            }

            
            
        }

        
    }

}



?>