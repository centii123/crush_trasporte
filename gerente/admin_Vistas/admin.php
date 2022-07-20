<?php
 include('encabezado/admincabeza.php');
?>
    <div class="contenedor">
        <div class="nav">
        <div class="navega">
            <div class="inicio activemas" style="padding-left: 0px;"><a href="admin.php"><div class="espacii"><box-icon type='solid' name='home'></box-icon>INICIO</div></a></div>
            <div class="inicio" style="padding-left: 0px;"><a href="dashboard.php"><div class="espacii"><box-icon type='solid' name='dashboard'></box-icon>VER DASHBOARD</div></a></div> 
            <span class="espacioy"><p><box-icon type='solid' name='user'></box-icon>PERSONAL<img src="iconos/chevron-down.svg" alt="" id="imagen"></p></span>
            <a href="adminpersonalagregar.php" class="centrar"><box-icon type='solid' name='user-plus'></box-icon>Agregar personal</a>
            <a href="adminpersonalgestionar.php" class="centrar"><box-icon type='solid' name='user-detail'></box-icon>Gestionar personal</a>
            <span class="espacioy"><p><box-icon type='solid' name='briefcase-alt'></box-icon>VIAJES<img src="iconos/chevron-down.svg" alt="" id="imagen"></p></span>
            <a href="adminViajesagregar.php" class="centrar"><box-icon type='solid' name='plus-circle'></box-icon>Agregar Viaje </a>
            <a href="adminViajesgestionar.php" class="centrar"><box-icon type='solid' name='file'></box-icon>Gestionar Viajes </a>
            <span class="espacioy"><p><box-icon type='solid' name='bus'></box-icon>BUSES<img src="iconos/chevron-down.svg" alt="" id="imagen"></p></span>
            <a href="adminbusagregar.php" class="centrar"><box-icon type='solid' name='plus-circle'></box-icon>Agregar bus</a>  
            <a href="adminbusgestionar.php" class="centrar"><box-icon type='solid' name='file'></box-icon>Gestionar buses</a>               
        </div>      
        
        </div>
        <div class="contenido" style=" background: url(css/wallpaperbetter.com_1600x900\ \(4\).jpg); background-size: cover; background-position: center; margin: 0px 5px 0px 5px; display: flex; justify-content: center">
        
                <div class="medio">
                    
                    <div class="animado">
                    <p>
                    BIENVENID@
                    <span>
                        <?php echo $_SESSION['usuario'] ?>
                    </span>
                    &mdash; AL MODULO GERENTE &mdash;
                    </p>
                    </div>
                    
                </div>
            
            
            
        </div>
    </div>

<?php
include('pie/pie.php');
?>