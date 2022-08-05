<?php
include_once ('encabezado/encabezado.php');
include_once('../controladores/catalogo.php');
?>
<div class="contenedor">
    <div class="nav">
    <div class="navega">
        <div class="inicio" style="padding-left: 0px;"><a href="index.php"><div class="espacii"><box-icon type='solid' name='home'></box-icon>INICIO</div></a></div>
        <div class="inicio activemas" style="padding-left: 0px;"><a href="#"><div class="espacii"><box-icon type='solid' name='layout'></box-icon>CATALOGO</div></a></div> 
        <div class="inicio" style="padding-left: 0px;"><a href="mis_viajes.php"><div class="espacii"><box-icon type='solid' name='briefcase-alt'></box-icon>MIS VIAJES</div></a></div> 
    </div>  
    </div>
    <div class="contenido" >
        <div class="titulo">
            <h1>BUSCADOR</h1>
        </div>
        <hr>
        <div class="flex">
            <div class="busqueda">               
                <form action="catalogo.php" method="post" >                   
                    <label for="destino">PROVINCIA DESTINO</label>
                        <select name="salida" id="destino">
                        <option value="">--provincia</option> 
                           <?php echo provincia()?> 
                        </select>
                    <label for="llegada">PROVINCIA LLEGADA</label>
                    <select name="llegada" id="llegada">
                    <option value="">--provincia</option> 
                    <?php echo provincia()?> 
                    </select>
                    <button type="submit" name="botonb" >buscar</button>
                </form>
            </div>
        </div>
        <hr>
        <center><h1>CATALOGO</h1></center>
        <div class="cards">
            <?php
                echo tarjetas();
            ?>
        </div>
</div>
<?php
include_once ('pie/pie.php')
?>