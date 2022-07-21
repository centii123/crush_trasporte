<?php
include_once('../modelo/conexion.php');



function tarjetas(){
    $conexcatalogo= new catalogo();
    $funsion=$conexcatalogo->tajetas();
    print_r(pg_fetch_array($funsion));
    while($row=pg_fetch_array($funsion)){
        ?>
            <!--margin-->
            <div class="card"> <!--border-->
                <h1><?php echo $row['placab'] ?></h1>
                <h3>provincia salida: <?php echo $row['provinciasalida '] ?><br> provincia llegada: <?php echo $row['provinciallegada'] ?></h3>
                <img src="https://www.elagoradiario.com/wp-content/uploads/2022/05/Sidney-Australia-1140x600.jpg" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit eos veritatis facere aliquam enim quod expedita velit? Doloribus nostrum voluptate necessitatibus nemo, omnis expedita dolores itaque corporis, assumenda officia totam!</p>
                <button><a href="datos.php">RESERVAR</a></button>
                <!--padding-->
            </div>
        <?php
    }

}

?>
