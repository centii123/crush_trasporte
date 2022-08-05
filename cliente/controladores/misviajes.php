<?php
include_once('../modelo/conexion.php');

/*function buscar(){
    $conexbuscar= new buscar();
    $funsion=$conexbuscar->buscar();
    while($row=pg_fetch_array($funsion)){
        ?>
        <option value="<?php echo $row ['provinciaid']?>"><?php echo $row['descripcion']?></option> 
        
        <?php
    }
}*/
function mis_viajes(){

    $idusuario=$_SESSION['datosUs']['usuarioid']; //session id usuario
    $conexmis_viajes= new mis_viajes();
    $funsion=$conexmis_viajes-> misViajes($idusuario);
    while($row=pg_fetch_array($funsion)){
     ?>
      <div class="card"> <!--border-->
                <h3>Nro boleto:<?php echo  $row['boletoid'] ?></h3>
                <h3>id viaje : <?php echo  $row['viajesid'] ?></h3>
                <h3>lugar del viaje: <?php echo  $row['salida'] ?> -> <?php echo  $row['llegada'] ?>  </h3>
                <img src="https://www.elagoradiario.com/wp-content/uploads/2022/05/Sidney-Australia-1140x600.jpg" alt="">
                <h3>Nombre del pasajero : <?php echo  $row['nombrespasajero'] ?></h3>
                <h3>Apellido del pasajero :<?php echo  $row['apellidospasajero'] ?></h3>
                <h3>cedula: <?php echo  $row['cedulap'] ?></h3>
                <h3>Asiento : <?php echo  $row['asiento'] ?></h3>
                <h3>FECHA DE VIAJE : <br> <?php echo  $row['fechaviaje'] ?></h3>
                <!--padding-->
            </div>
     <?php
    }
}




?>