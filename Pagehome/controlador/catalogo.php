<?php
    require_once "../modelo/catalogo.php";
    function catalogo(){
        $consulta=new Consulta();
        $modelo=$consulta->catalogo();
        while($row=pg_fetch_array($modelo)){
            ?>
            <div class="oferta">
                <h2><?php echo $row['provinciallegada']  ?></h2>
                <p class="precio"><?php echo $row['costoviaje']?></p>
                <p><?php echo $row['provinciasalida'] ?> -> <?php echo $row['provinciallegada'] ?> </p>
                <hr>
                <img src="img/<?php echo $row['fotoviaje'] ?>" width="250px" height="150px">
                <hr>
                <a href="inicio_sesion.php" class="resultado">Reservar Ahora</a>
            </div>
            <?php
        }
    }

?>