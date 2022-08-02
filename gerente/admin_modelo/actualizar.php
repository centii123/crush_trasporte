<?php
include 'baseDatos.php';

class actualizar extends Conexion{
    private $consulta;
    public $query;

    public function verbus($esta){
        $this->consulta=" SELECT * FROM buses WHERE placab= '$esta'";
        $this->query=pg_query($this->conex,$this->consulta);
        return $this->query;
    }
    public function actualizarbus($placa,$modelo,$asientos,$imagenbus,$estado,$ids){
        $this->consulta="UPDATE buses SET placab='$placa', modelo = '$modelo',asientos = $asientos, imagenbus = '$imagenbus', estado = $estado WHERE placab='$ids'";
        $this->query=pg_query($this->conex,$this->consulta);
        return $this->query;
    }
    public function verpersonal($esta){
        $this->consulta=" SELECT * FROM empleados WHERE cedulae= '$esta'";
        $this->query=pg_query($this->conex,$this->consulta);
        return $this->query;
    }

    public function estadopersonal($estado,$ids){
        $this->consulta="UPDATE empleados SET estados = $estado WHERE cedulae='$ids'";
        $this->query=pg_query($this->conex,$this->consulta);
        return $this->query;
    }
    public function estadobus($estado,$ids){
        $this->consulta="UPDATE buses SET estado = $estado WHERE placab='$ids'";
        $this->query=pg_query($this->conex,$this->consulta);
        return $this->query;
    }

    public function actualizarpersonal($cedula,$nombres,$apellidos,$estado,$imagen,$roles,$ids){
        $this->consulta="UPDATE empleados SET cedulae='$cedula',nombres='$nombres', apellidos='$apellidos', estados = $estado, imagenempleado='$imagen', rolesid=$roles WHERE cedulae='$ids'";
        $this->query=pg_query($this->conex,$this->consulta);
        return $this->query;
    }

    public function mostrarviajes($esta){
        $this->consulta="SELECT ve.veid,ve.cedulae cedulave, ve.viajesid viajeidve,v.viajesid,v.fotoviaje,v.fechaviaje,v.costoviaje,v.provinciasalida,salida.descripcion salida,v.provinciallegada, llegada.descripcion llegada,v.placab,v.estadosid,es.descripcion estadoviajedes,em.cedulae cedulaem,em.nombres nombreem,em.apellidos apellidosem FROM viajes_empleados ve INNER JOIN viajes v ON ve.viajesid=v.viajesid INNER JOIN provincia salida ON v.provinciasalida=salida.provinciaid INNER JOIN provincia llegada ON v.provinciallegada=llegada.provinciaid INNER JOIN estados es ON v.estadosid=es.estadosid INNER JOIN empleados em ON ve.cedulae=em.cedulae WHERE v.viajesid=$esta";
        $this->query=pg_query($this->conex,$this->consulta);
        return $this->query;
    }

    public function actualizarviajes($idviaje,$foto,$fecha,$costo,$salida,$llegada,$placa,$estado,$conductorid,$conductor,$oficialid,$oficial){
        $this->consulta="UPDATE viajes SET fotoviaje='$foto',fechaviaje='$fecha',costoviaje=$costo,provinciasalida=$salida,
        provinciallegada=$llegada,placab='$placa',estadosid=$estado where viajesid= $idviaje";
        $this->query=pg_query($this->conex,$this->consulta);
        if($this->query){
            $actualizarconductor="UPDATE viajes_empleados SET cedulae='$conductor' WHERE viajesid=$idviaje AND cedulae= '$conductorid'";
            $this->query=pg_query($this->conex,$actualizarconductor);

            if($this->query){
                $actualizaroficial="UPDATE viajes_empleados SET cedulae='$oficial' WHERE viajesid=$idviaje AND cedulae= '$oficialid'";
            $this->query=pg_query($this->conex,$actualizaroficial);
            }
        }
    }
}



?>