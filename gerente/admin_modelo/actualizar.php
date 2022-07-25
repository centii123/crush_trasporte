<?php
include 'baseDatos.php';

class actualizar extends Conexion{
    private $consulta;
    public $query;

    public function verbus($esta){
        $this->consulta=" SELECT * FROM viajes WHERE placab= '$esta'";
        $this->query=pg_query($this->conex,$this->consulta);
        return $this->query;
    }
    public function bus($modelo,$asientos,$imagenbus,$estado,$ids){
        $this->consulta="UPDATE buses SET modelo = '$modelo',asientos = $asientos, imagenbus = '$imagenbus', estado = $estado WHERE placab='$ids'";
        $this->query=pg_query($this->conex,$this->consulta);
        return $this->query;
    }
    public function verpersonal($esta){
        $this->consulta=" SELECT * FROM empleados WHERE cedulae= '$esta'";
        $this->query=pg_query($this->conex,$this->consulta);
        return $this->query;
    }

    public function estadopersonal($estado,$ids){
        $this->consulta="UPDATE empleados SET estado = $estado WHERE placab='$ids'";
        $this->query=pg_query($this->conex,$this->consulta);
        return $this->query;
    }
}



?>