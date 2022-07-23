<?php
include_once('../modelo/conexion.php');
function buscar(){
    $conexbuscar= new buscar();
    $funsion=$conexbuscar->buscar();
    while($row=pg_fetch_array($funsion)){
        ?>
        <option value="<?php echo $row ['provinciaid']?>"><?php echo $row['descripcion']?></option> 
        
        <?php

    }

}




?>