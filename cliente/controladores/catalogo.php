<?php
include_once('../modelo/conexion.php');



function tarjetas(){
    if(isset($_POST['botonb'])){// ISSET PARA DECIR SI SE ENCONTRO, SI SE ENCONTRO EN EL METODO DE POST QUE HAGO
        if(strlen($_POST['llegada'] > 0)){
            $llegada=$_POST['llegada'];
        }else{
            $llegada="";
        }

        if(strlen($_POST['salida'])>0){
            $salida=$_POST['salida'];;
        }else{
            $salida="";
        }
    }else{
        $llegada="";
        $salida="";
    }
    
    $conexcatalogo= new catalogo();
    $funsion=$conexcatalogo->tajetas($salida,$llegada);
    while($row=pg_fetch_array($funsion)){
        ?>
          <!--margin-->
            <div class="card"> <!--border-->
                <h1><?php echo $row['viajesid'] ?></h1>              
                <img src="https://www.elagoradiario.com/wp-content/uploads/2022/05/Sidney-Australia-1140x600.jpg" alt="">
                <h3>provincia salida: <?php echo $row['provinciasalida'] ?><br> provincia llegada: <?php echo $row['provinciallegada'] ?></h3>
                <p>costo: <?php echo $row['costoviaje'] ?><br><br>bus: <?php echo $row['placab'] ?></p>
                
                <button><a href="datos.php">RESERVAR</a></button>
                <!--padding-->
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
