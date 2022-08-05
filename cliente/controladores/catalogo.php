<?php
include_once('../modelo/conexion.php');


// ISSET PARA DECIR SI SE ENCONTRO, SI SE ENCONTRO EN EL METODO DE POST QUE HAGO
function tarjetas(){
    if(isset($_POST['botonb'])){
        if($_POST['llegada']){
            $llegada=intval($_POST['llegada']);
        }else{
            $llegada=0;
        }

        if($_POST['salida']){
            $salida=intval($_POST['salida']);
            
        }else{
            $salida=0;
        }
        $estados=0;
    }else{
        $llegada=0;
        $salida=0;
        $estados=1;// LA BUSQUEDA 
    }
    
    $conexcatalogo= new catalogo();
    $funsion=$conexcatalogo->tajetas($salida,$llegada,$estados);
    while($row=pg_fetch_array($funsion)){
        ?>
          <!--margin-->
            <div class="card"> <!--border-->
                <h1><?php echo $row['viajesid'] ?></h1>              
                <img src="https://www.elagoradiario.com/wp-content/uploads/2022/05/Sidney-Australia-1140x600.jpg" alt="">
                <h3>provincia salida: <?php echo $row['provinciasalida'] ?><br> provincia llegada: <?php echo $row['provinciallegada'] ?></h3>
                <p>costo: <?php echo $row['costoviaje'] ?><br><br>bus: <?php echo $row['placab'] ?></p>
                <p><?php echo $row['estadosid'] ?></p>
                <button><a href="datos.php?viajeid=<?php echo $row['viajesid']?>&viajesalida=<?php echo $row['provinciasalida'] ?>&viajellegada=<?php echo $row['provinciallegada']?>">RESERVAR</a></button>
               
            </div>
        <?php
    }
}

function provincia(){
    $conexver= new ver();
    $funsion=$conexver->provincias();
    while($row=pg_fetch_array($funsion)){
        ?>
        <option value="<?php echo $row ['provinciaid']?>"><?php echo $row['descripcion']?></option> 
        
        <?php

    }

}




?>
