<?php
include('encabezado/admincabeza.php');
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
            <a href="adminbusagregar.php" class="centrar"><box-icon type='solid' name='plus-circle'></box-icon>Agregar bus</a>  
            <a href="adminbusgestionar.php" class="centrar"><box-icon type='solid' name='file'></box-icon>Gestionar buses</a>               
        </div> 
        </div>
        <div class="contenido">
            <div class="titulo">
                <h1>REPORTE</h1>
            </div>
            <hr>
            <div class="flex">
            <div class="busqueda">               
                <form action="" method="post" >                   
                        <label for="paisL">pais llegada</label>
                        <select name="paisL" id="paisL">
                            <option value=""></option> 
                        </select>
                        <label for="provinciaL">provincia llegada</label>
                        <select name="provinciaL" id="provinciaL">
                            <option value=""></option> 
                            <option value="34">hola2</option>
                        </select>
                        <label for="paisS">pais salida</label>
                        <select name="paisS" id="paisS">
                            <option value=""></option>
                        </select>
                        <label for="provinciaS">provincia salida</label>
                        <select name="provinciaS" id="provinciaS">
                            <option value=""></option> 
                            <option value="34">hola2</option>
                        </select>
                    <button type="submit">buscar</button>
                </form>
            </div>
        </div>
        <hr>
            <div class="tabla">
            <table>
                <tr>
                    <th>imagen</th>
                    <th>correo</th>
                    <th>contraseña</th>
                    <th>eliminar</th>
                    <th>editar</th>
                </tr>
                <tr>
                    <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDAzXafoV2RDPvTnZ9jc11D_AM1Tla6vUIviA3HoyNQ48_5CaMrw91K4yr2n9T1d3-RQc&usqp=CAU" alt="" width="60px"></td>
                    <td>hollaa</td>
                    <td>dasgdgDG</td>
                    <td class="elimi_edita"><button onclick="return eliminar()" class="elimi_edit"><a href="https://www.youtube.com/results?search_query=no+se+ejecuta+javascript+en+php"><img src="iconos/trash-2.svg" alt=""></a></button></td>
                    <td ><button class="elimi_edit"><a href="adminVuelosedit.php"><img src="iconos/edit.svg" alt=""></a></button></td>
                </tr>
            </table>
        </div>
        </div>
    </div>
    <?php
include('pie/pie.php');
?>