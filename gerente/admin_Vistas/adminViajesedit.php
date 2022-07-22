<?php
include_once('encabezado/admincabeza.php');
?>
    <div class="contenedor">
        <div class="nav">
        <div class="navega">
            <div class="inicio" style="padding-left: 0px;"><a href="admin.php"><div class="espacii"><box-icon type='solid' name='home'></box-icon>INICIO</div></a></div>
            <div class="inicio" style="padding-left: 0px;"><a href="dashboard.php"><div class="espacii"><box-icon type='solid' name='dashboard'></box-icon>VER DASHBOARD</div></a></div> 
            <span class="espacioy"><p><box-icon type='solid' name='user'></box-icon>PERSONAL<img src="iconos/chevron-down.svg" alt="" id="imagen"></p></span>
            <a href="adminpersonalagregar.php" class="centrar"><box-icon type='solid' name='user-plus'></box-icon>Agregar personal</a>
            <a href="adminpersonalgestionar.php" class="centrar"><box-icon type='solid' name='user-detail'></box-icon>Gestionar personal</a>
            <span class="espacioy"><p><box-icon type='solid' name='briefcase-alt'></box-icon>VIAJES<img src="iconos/chevron-down.svg" alt="" id="imagen"></p></span>
            <a href="adminViajesagregar.php" class="centrar"><box-icon type='solid' name='plus-circle'></box-icon>Agregar Viaje </a>
            <a href="adminViajesgestionar.php" class="centrar activemas"><box-icon type='solid' name='file'></box-icon>Gestionar Viajes </a>
            <span class="espacioy"><p><box-icon type='solid' name='bus'></box-icon>BUSES<img src="iconos/chevron-down.svg" alt="" id="imagen"></p></span>
            <a href="adminbusagregar.php" class="centrar"><box-icon type='solid' name='plus-circle'></box-icon>Agregar bus</a>  
            <a href="adminbusgestionar.php" class="centrar"><box-icon type='solid' name='file'></box-icon>Gestionar buses</a>               
        </div> 
        </div>
        <div class="contenido">
            <div class="titulo">
                <h1>AGREGAR VUELOS</h1>
            </div>
            <div class="center">
            <div class="registroadmin">
                    <div class="center">
                        <h3>Registrar viaje</h3>
                    </div>
                    <form action="pruebas.php" method="post" enctype="multipart/form-data">
                        <label for="estado">Estados</label>
                        <select name="estado" id="estado">
                            <option value="1">Activo</option> <!--values es el valor que envias en php-->
                            <option value="0">Inactivo</option>
                        </select>
                        <label for="provS">provincia de salida</label>
                        <select name="provS" id="provS">
                            <option value="">--provincia--</option> 
                            <?php
                            echo $mostrar->mostrarProvincias();
                            ?>
                        </select>
                        <label for="provLL">provincia de llegada</label>
                        <select name="provLL" id="provLL">
                            <option value="">--provincia--</option>
                            <?php
                            echo $mostrar->mostrarProvincias();
                            ?>
                        </select>
                        <label for="fecha">fecha y hora del viaje</label>
                        <input type="datetime-local" name="fecha" id="fecha">
                        <label for="fecha">Costo del viaje</label>
                        <input type="number" name="fecha" id="fecha">
                        <label for="bus">bus</label>
                        <select name="bus" id="bus">
                            <option value="">--pais--</option>
                        </select>                      
                        <label for="img">Foto del viaje</label>
                        <input type="file" name="" id="img">
                        <button type="submit">Registrarse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
include_once('pie/pie.php');
?>