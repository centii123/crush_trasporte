<?php
include_once ('encabezado/encabezado.php');
include "../controladores/pasajero.php";
?>
<div class="contenedor">
    <div class="nav">
        <div class="navega">
            <div class="inicio" style="padding-left: 0px;"><a href="index.php"><div class="espacii"><box-icon type='solid' name='home'></box-icon>INICIO</div></a></div>
            <div class="inicio" style="padding-left: 0px;"><a href="catalogo.php"><div class="espacii"><box-icon type='solid' name='layout'></box-icon>CATALOGO</div></a></div> 
            <div class="inicio" style="padding-left: 0px;"><a href="mis_viajes.php"><div class="espacii"><box-icon type='solid' name='briefcase-alt'></box-icon>MIS VIAJES</div></a></div> 
            <span class="espacioy"><p><box-icon type='solid' name='coupon'></box-icon>COMPRAR<img src="iconos/chevron-down.svg" alt="" id="imagen"></p></span>
            <a href="#" class="centrar activemas"><box-icon type='solid' name='user-check'></box-icon></box-icon>Paso 1</a>         
        </div>     
     </div>

    <div class="contenido" >
        <div class="titulo">
            <h1>COMPRAR</h1>
        </div>
        <hr>
            <div class="center">
            <div class="registroadmin">
                <div class="center"><h3>DATOS DEL PASAJERO</h3></div>
                <form action="datos.php?viajeid=<?php echo $_GET['viajeid']?>&viajesalida=<?php echo $_GET['viajesalida'] ?>&viajellegada=<?php echo $_GET['viajellegada']?>" method="post">
                    <label for="viaje">viaje </label>
                        <select name="viaje" id="viaje"  >
                            <?php
                              if(isset($_GET['viajeid'])){ // get enviar 
                                ?>
                                <option value="<?php echo $_GET['viajeid']?>" selected ><?php echo $_GET['viajesalida']?>-<?php echo $_GET['viajellegada']?></option> 
                                <?php
                              } 
                            ?>
                        </select>
                    <label for="cedula">cedula</label>
                    <input type="text" name="cedula" minlength="10" maxlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" placeholder="cedula">  
                    <!--<input type="number" name="cedula" id="cedula" placeholder="cedula" min="10000000000" max="9999999999" >-->
                    <label for="nombres">nombres</label>
                    <input type="text" name="nombres" id="nombres" placeholder="nombres" >
                    <label for="apellidos">apellidos</label>
                    <input type="text" name="apellidos" id="apellidos" placeholder="apellidos" >
                    
                    <label for="Asiento">Asiento</label>
                    <input type="number" name="Asiento" id="Asiento" placeholder="Asiento" >
                    <button type="submit" name="boton"><!--<a href="comprar.php">SIGUIENTE</a>-->SIGUIENTE</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include_once ('pie/pie.php')
?>