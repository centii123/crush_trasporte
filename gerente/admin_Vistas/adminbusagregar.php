<div id="espacioA"></div>
<?php
include('../admin_controlador/controlador.php');
include_once('encabezado/admincabeza.php');
include_once('../admin_controlador/bus.php');
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
                <a href="adminViajesgestionar.php" class="centrar"><box-icon type='solid' name='file'></box-icon>Gestionar Viajes </a>
                <span class="espacioy"><p><box-icon type='solid' name='bus'></box-icon>BUSES<img src="iconos/chevron-down.svg" alt="" id="imagen"></p></span>
                <a href="adminbusagregar.php" class="centrar activemas"><box-icon type='solid' name='plus-circle'></box-icon>Agregar bus</a>  
                <a href="adminbusgestionar.php" class="centrar"><box-icon type='solid' name='file'></box-icon>Gestionar buses</a>               
            </div>
        </div>
        
        <div class="contenido">
            <div class="titulo">
                <h1>AGREGAR BUS</h1>
            </div>
            <div class="center">
                <div class="registroadmin">
                    <div class="center">
                        <h3>Registrar bus</h3>
                    </div>
                    <form action="adminbusagregar.php" method="POST" enctype="multipart/form-data">
                        <label for="estado">Estado</label>
                        <select name="estado" id="estado" >
                            <option value="">--estado</option> 
                            <option value="1">Activo</option>
                            <option value="2">Inactivo</option>
                        </select>             
                        <label for="placa">Placa</label>
                        <input type="text" name="placa" id="placa" placeholder="placa" >
                        <label for="modelo">Modelo</label>
                        <input type="text" name="modelo" id="modelo" placeholder="modelo" >
                        <label for="asientos">Numero de asientos</label>
                        <input type="number" name="asientos" id="asientos" placeholder="Numero de asientos" >
                        <label for="img">Imagen del bus</label>
                        <input type="file" name="img" id="img" >
                        <button type="submit" name="boton">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
include_once('pie/pie.php');
?>