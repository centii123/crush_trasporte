<?php
include_once('encabezado/admincabeza.php');
$Mostrar=new Mostrar();

?>
</head>

<body>

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
                <h1>ADMINISTRAR VIAJES</h1>
            </div>
            <hr>
            <div class="flex">
            <div class="busqueda">               
                <form action="adminViajesgestionar.php" method="POST" >                   
                        <label for="estado">estado</label>
                        <select name="estado" id="estado" value="3">
                        <option value="">---estados</option> 
                        <?php

                            echo $Mostrar->estados();

                        ?>                             
                        </select>
                        <label for="provincia">provincia</label>
                        <input type="text" name="provincia" id="provincias" placeholder="provincia">
                        <button type="submit">Buscar</button>
                </form>
            </div>
        </div>
        <hr>
            <div class="tabla">
            <table>
                <tr>
                    <th>Nro viaje</th>
                    <th>imagen</th>
                    <th>salida</th>
                    <th>llegada</th>
                    <th>fecha</th>
                    <th>costo</th>
                    <th>bus</th>
                    <th>estado</th>
                    <th>editar</th>
                    <th>cambiarEstado</th>
                </tr>
                <?php
                    echo mostrarviaje();
                ?>
            </table>
        </div>
        <div class="paginacion">
            <?php
                $filas=$Mostrar->mostrarviajesN();
                $formula=ceil($filas/10);

                echo "<center><a href='adminViajesgestionar.php?pagina=1'>Primera</a>";

                for($i=1; $i<= $formula; $i++){
                    echo "<a href='adminViajesgestionar.php?pagina=".$i."'> ".$i." </a> ";
                }
                echo "<a href='adminViajesgestionar.php?pagina=$formula'>Siguiente</a></center>";
            ?>
        </div>
        </div>
    </div>
    <?php
include_once('pie/pie.php');
?>