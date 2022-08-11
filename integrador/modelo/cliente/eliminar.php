<?php
require '../../basedatos/basedatos.php';
class eliminar extends conexion{
    private $consulta;
    public $query;

    public function eliminarboleto($idboleto,$idpasajero){
        $this->consulta="DELETE FROM pasajero WHERE cedulap='$idpasajero'";
        $this->query=pg_query($this->conex,$this->consulta);
        if($this->query){

            $consultaeliminar="DELETE FROM boleto WHERE boletoid=$idboleto";
            $this->query=pg_query($this->conex,$consultaeliminar);
        
                
        }
        
       


    }

}
?>