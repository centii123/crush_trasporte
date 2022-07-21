<?php
include_once ('encabezado/encabezado.php');
include_once('../controladores/catalogo.php')
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
                <form action="" method="post" >                   
                    <label for="destino">PAIS DESTINO</label>
                        <select name="destino" id="destino">
                            <option value=""></option> 
                            <option value="34">Miami</option>
                        </select>
                    <label for="llegada">PAIS LLEGADA</label>
                    <select name="llegada" id="llegada">
                        <option value=""></option> 
                        <option value="34">Miami</option>
                    </select>
                    <label for="buscar">buscar</label>
                    <input type="text" name="buscar" id="buscar" placeholder="buscar" >
                    <button type="submit">buscar</button>
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