<?php
include_once('encabezado/admincabeza.php');
$Mostrar=new Mostrar();
?>
    <div class="contenedor">
        <div class="nav">
        <div class="navega">
            <div class="inicio " style="padding-left: 0px;"><a href="admin.php"><div class="espacii"><box-icon type='solid' name='home'></box-icon>INICIO</div></a></div>
            <div class="inicio" style="padding-left: 0px;"><a href="dashboard.php"><div class="espacii"><box-icon type='solid' name='dashboard'></box-icon>VER DASHBOARD</div></a></div> 
            <span class="espacioy"><p><box-icon type='solid' name='user'></box-icon>PERSONAL<img src="iconos/chevron-down.svg" alt="" id="imagen"></p></span>
            <a href="adminpersonalagregar.php" class="centrar"><box-icon type='solid' name='user-plus'></box-icon>Agregar personal</a>
            <a href="adminpersonalgestionar.php" class="centrar"><box-icon type='solid' name='user-detail'></box-icon>Gestionar personal</a>
            <span class="espacioy"><p><box-icon type='solid' name='briefcase-alt'></box-icon>VIAJES<img src="iconos/chevron-down.svg" alt="" id="imagen"></p></span>
            <a href="adminViajesagregar.php" class="centrar"><box-icon type='solid' name='plus-circle'></box-icon>Agregar Viaje </a>
            <a href="adminViajesgestionar.php" class="centrar"><box-icon type='solid' name='file'></box-icon>Gestionar Viajes </a>
            <span class="espacioy"><p><box-icon type='solid' name='bus'></box-icon>BUSES<img src="iconos/chevron-down.svg" alt="" id="imagen"></p></span>
            <a href="adminbusagregar.php" class="centrar"><box-icon type='solid' name='plus-circle'></box-icon>Agregar bus</a>  
            <a href="adminbusgestionar.php" class="centrar activemas"><box-icon type='solid' name='file'></box-icon>Gestionar buses</a>               
        </div>
        </div>
        <div class="contenido">
        <div class="titulo">
            <h1>ADMINISTRAR BUSES</h1>
        </div>
        <hr>
        <div class="flex">
            <div class="busqueda">               
                <form action="" method="post" >  
                    <label for="estado">estado</label>
                        <select name="estado" id="estado">
                            <option value="">activo</option> 
                            <option value="34">hola2</option>
                        </select>                 
                    <label for="placa">placa</label>
                    <input type="text" name="placa" id="placa" placeholder="placa" >
                </form>
            </div>
        </div>
        <hr>
        <div class="tabla">
            <table>
                <tr>
                    <th>placa</th>
                    <th>imagen</th>
                    <th>modelo</th>
                    <th>total_asientos</th>
                    <th>estado</th>
                    <th>editar</th>
                    <th>cambiarEstado</th>
                </tr>
                
                <?php
                    echo verBuses();
                ?>                
                
            </table>
            
        </div>
        <div class="paginacion">
        <?php
        
        $totalE=$Mostrar->mostrarBusesN();
        $total_paginas=ceil($totalE/10);
    
    
    
        echo "<center><a href='adminbusgestionar.php?pagina=1'>"  .'Anterior'. "</a>";
        
        for($i=1;  $i<=$total_paginas;   $i++){
        
        echo "<a href='adminbusgestionar.php?pagina=".$i."'> ".$i." </a> ";
        
        
        }
        
        echo "<a href='adminbusgestionar.php?pagina=$total_paginas'>"  .'Siguiente'. "</a></center>";
            ?>
        </div>
        
    </div>
</div>
    <?php
include_once('pie/pie.php');
?>