<div id="espacioA"></div>
<?php
include('../../controlador/gerente/controlador.php');
include_once('encabezado/admincabeza.php');
include_once('../../controlador/gerente/personal.php')
?>
    <div class="contenedor">
        <div class="nav">
        <div class="navega">
            <div class="inicio" style="padding-left: 0px;"><a href="admin.php"><div class="espacii"><box-icon type='solid' name='home'></box-icon>INICIO</div></a></div>
            <div class="inicio" style="padding-left: 0px;"><a href="../../Pagehome/vistas/index.php"><div class="espacii"><box-icon type='solid' name='dashboard'></box-icon>VER DASHBOARD</div></a></div> 
            <span class="espacioy"><p><box-icon type='solid' name='user'></box-icon>PERSONAL<img src="iconos/chevron-down.svg" alt="" id="imagen"></p></span>
            <a href="adminpersonalagregar.php" class="centrar activemas"><box-icon type='solid' name='user-plus'></box-icon>Agregar personal</a>
            <a href="adminpersonalgestionar.php" class="centrar"><box-icon type='solid' name='user-detail'></box-icon>Gestionar personal</a>
            <span class="espacioy"><p><box-icon type='solid' name='briefcase-alt'></box-icon>VIAJES<img src="iconos/chevron-down.svg" alt="" id="imagen"></p></span>
            <a href="adminViajesagregar.php" class="centrar"><box-icon type='solid' name='plus-circle'></box-icon>Agregar Viaje </a>
            <a href="adminViajesgestionar.php" class="centrar"><box-icon type='solid' name='file'></box-icon>Gestionar Viajes </a>
            <span class="espacioy"><p><box-icon type='solid' name='bus'></box-icon>BUSES<img src="iconos/chevron-down.svg" alt="" id="imagen"></p></span>
            <a href="adminbusagregar.php" class="centrar"><box-icon type='solid' name='plus-circle'></box-icon>Agregar bus</a>  
            <a href="adminbusgestionar.php" class="centrar"><box-icon type='solid' name='file'></box-icon>Gestionar buses</a>               
        </div>
        </div>
        <div class="contenido">
            <div class="titulo">
                <h1>AGREGAR PERSONAL</h1>
            </div>
            <div class="center">
                <div class="registroadmin">
                    <div class="center">
                        <h3>Registrar personal</h3>
                    </div>
                    <form action="adminpersonalagregar.php" method="post" enctype="multipart/form-data">
                        <label for="estado">Estado</label>
                        <select name="estado" id="estado" >
                            <option value="">--estado</option> 
                            <option value="1">Activo</option> <!--values es el valor que envias en php-->
                            <option value="2">Inactivo</option>
                        </select>
                        <label for="nombre">Cedula</label>
                        <input type="text" name="cedula" minlength="10" maxlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" placeholder="cedula">  
                        <label for="nombre">Nombres</label>
                        <input type="text" name="nombres" id="nombre" placeholder="nombre" >
                        <label for="apellido">Apellidos</label>
                        <input type="text" name="apellidos" id="apellido" placeholder="apellido" >
                        <label for="role">Rol</label>
                        <select name="role" id="role" required>
                            <option value="">--rol</option> <!--values es el valor que envias en php-->
                            <?php
                            echo $Mostrar->role();
                            ?>
                        </select>
                        <label for="img">Foto del empleado</label>
                        <input type="file" name="foto" id="img" >   
                        <button type="submit" name="boton">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
include_once('pie/pie.php');
?>