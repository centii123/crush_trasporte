<?php
include_once ('encabezado/encabezado.php');
include ('../controladores/misviajes.php');
?>
<div class="contenedor">
    <div class="nav">
    <div class="navega">
        <div class="inicio" style="padding-left: 0px;"><a href="index.php"><div class="espacii"><box-icon type='solid' name='home'></box-icon>INICIO</div></a></div>
        <div class="inicio " style="padding-left: 0px;"><a href="catalogo.php"><div class="espacii"><box-icon type='solid' name='layout'></box-icon>CATALOGO</div></a></div> 
        <div class="inicio activemas" style="padding-left: 0px;"><a href="#"><div class="espacii"><box-icon type='solid' name='briefcase-alt'></box-icon>MIS VIAJES</div></a></div> 
       
    </div>  
    </div>
    <div class="contenido" >
        
        <!--<hr>
        <div class="flex">
            <div class="busqueda">               
                <form action="" method="post" >  
                    <label for="buscar">buscar</label>                                   
                    <input type="text" name="buscar" id="buscar" placeholder="buscar" >
                    <button type="submit">buscar</button>
                </form>
            </div>
        </div>
        <hr>-->
        <center><h1>MIS VIAJES</h1></center>
        <div class="cards">

            <?php

            echo mis_Viajes();
            ?>

  </div>
</div>
<?php
include_once('pie/pie.php')
?>