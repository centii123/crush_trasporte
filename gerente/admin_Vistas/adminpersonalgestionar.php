<?php
include('../admin_controlador/controlador.php');
include_once('encabezado/admincabeza.php');
$Mostrar=new Mostrar();
?>
    <div class="contenedor">
        <div class="nav">
        <div class="navega">
            <div class="inicio" style="padding-left: 0px;"><a href="admin.php"><div class="espacii"><box-icon type='solid' name='home'></box-icon>INICIO</div></a></div>
            <div class="inicio" style="padding-left: 0px;"><a href="../../Pagehome/vistas/index.php"><div class="espacii"><box-icon type='solid' name='dashboard'></box-icon>VER DASHBOARD</div></a></div> 
            <span class="espacioy"><p><box-icon type='solid' name='user'></box-icon>PERSONAL<img src="iconos/chevron-down.svg" alt="" id="imagen"></p></span>
            <a href="adminpersonalagregar.php" class="centrar"><box-icon type='solid' name='user-plus'></box-icon>Agregar personal</a>
            <a href="adminpersonalgestionar.php" class="centrar activemas"><box-icon type='solid' name='user-detail'></box-icon>Gestionar personal</a>
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
                <h1>ADMINISTRAR PERSONAL</h1>
            </div>
            <hr>
            <div class="flex">
            <div class="busqueda">               
                <form action="" method="post" >  
                    <label for="estado">Estado</label>
                        <select name="estado" id="estado">
                        <option value="">---estados</option>
                        <option value="1">Activo</option> 
                        <option value="2">Inactivo</option> 
                        </select>
                    <label for="role">role</label>
                        <select name="role" id="role">
                            <option value="">--roles</option> 
                            <?php
                                echo $Mostrar->role()
                            ?>
                        </select>
                    <label for="cedula">cedula</label>
                    <input type="number" name="cedula" id="cedula" placeholder="cedula" >
                    <button type="submit">Buscar</button>
                </form>
            </div>
        </div>
        <hr>
            <div class="tabla">
            <table>
                <tr>
                    <th>cedula</th>
                    <th>foto</th>
                    <th>nombres</th>
                    <th>apellidos</th>
                    <th>role</th>
                    <th>estado</th>
                    <th>editar</th>
                    <th>cambiarEstado</th>
                </tr>
                <?php
                    echo Personalver();
                ?>
            </table>
        </div>
        <div class="paginacion">
            <?php
                $numero=$Mostrar->mostrarpersonalN();
                $formula= ceil($numero/10);

                echo "<center><a href='adminpersonalgestionar.php?pagina=1'>Anterior</a>";
                for($i = 1; $i<=$formula; $i++ ){
                    echo "<a href='adminpersonalgestionar.php?pagina=".$i."'> ".$i." </a> ";
                }
                echo "<a href='adminpersonalgestionar.php?pagina=$formula'>Siguiente</a></center>";
            ?>
        </div>
        </div>
    </div>
    <?php
include_once('pie/pie.php');
?>