<?php  
include_once('../admin_modelo/baseDatos.php');

//buses
function verBuses(){
    if(isset($_GET['pagina'])){
        $pagina=$_GET['pagina'];
    }else{
        $pagina=1;
    }

    $porpagina=10;
    $formula=($pagina-1)*$porpagina;
    $Mostrar= new Mostrar();
    $fila=$Mostrar->mostrarBuses($formula);

    while($row=pg_fetch_array($fila)){
        ?>
            <tr>
                    <td><?php echo $row['placab']  ?></td>
                    <td><img src="../img/<?php echo $row['imagenbus']  ?>" alt="" width="60px"></td>                   
                    <td><?php echo $row['modelo']  ?></td>
                    <td><?php echo $row['asientos']  ?></td>
                    <?php
                    if($row['estado']==1){
                        ?>
                        <td>activo</td>
                        <td ><button class="boton"><a href="adminVuelosedit.php"><box-icon type='solid' name='edit'></box-icon></a></button></td>
                        <td><button class="boton" onclick="return desactivar()" ><a href="https://www.youtube.com/results?search_query=no+se+ejecuta+javascript+en+php">desactivar</a></button></td>
                        <?php
                    }else if($row['estado']==0){
                        ?>
                        <td>inactivo</td>
                        <td ><button class="boton"><a href="adminVuelosedit.php"><box-icon type='solid' name='edit'></box-icon></a></button></td>
                        <td><button class="boton" onclick="return activar()" ><a href="https://www.youtube.com/results?search_query=no+se+ejecuta+javascript+en+php">activar</a></button></td>
                        <?php
                    }
                    ?>
                    
                    
                </tr>
        <?php
    }   
}

//personal

function Personalver(){
    if(isset($_GET['pagina'])){
        $pagina=$_GET['pagina'];
    }else{
        $pagina=1;
    }

    if(isset($_POST['cedula'])){
        if(strlen($_POST['cedula']) >= 1){
            $cedula=$_POST['cedula'];
        }else{
            $cedula="?";
        }
    }else{
        $cedula="?";
    }

    if(isset($_POST['estado'])){
        $estado=intval($_POST['estado']);
    }else{
        $estado=1;
    }

    if(isset($_POST['role'])){
        $role=intval($_POST['role']);
    }else{
        $role=0;
    }
    
    $porpagina=10;
    $formula=($pagina - 1) * $porpagina;
    $Mostrar= new Mostrar();
    $consulta= $Mostrar->mostrarpersonal($cedula,$estado,$role,$formula);
    while($row=pg_fetch_array($consulta)){
        ?>
            <tr>
                <td><?php echo $row['cedulae']?></td>
                <td><img src="../img/<?php echo $row['imagenempleado']  ?>" alt="" width="60px"></td>                   
                <td><?php echo $row['nombres']  ?></td>
                <td><?php echo $row['apellidos']  ?></td>
                <td><?php echo $row['rolesid']  ?></td>
                <?php
                    if($row['estados']==1){
                        ?>
                        <td>activo</td>
                        <td ><button class="boton"><a href="adminVuelosedit.php"><box-icon type='solid' name='edit'></box-icon></a></button></td>
                        <td><button class="boton" onclick="return desactivar()" ><a href="https://www.youtube.com/results?search_query=no+se+ejecuta+javascript+en+php">desactivar</a></button></td>
                        <?php
                    }else if($row['estados']==2){
                        ?>
                        <td>inactivo</td>
                        <td ><button class="boton"><a href="adminVuelosedit.php"><box-icon type='solid' name='edit'></box-icon></a></button></td>
                        <td><button class="boton" onclick="return desactivar()" ><a href="https://www.youtube.com/results?search_query=no+se+ejecuta+javascript+en+php">activar</a></button></td>
                        <?php
                    }
                    ?>
            </tr>
        <?php
    }
}


//viajes

function mostrarviaje(){
    if(isset($_GET['pagina'])){
        $pagina=$_GET['pagina'];
    }else{
        $pagina=1;
    }
    if(isset($_POST['provincia'])){
        if(strlen($_POST['provincia']) >= 1){
            $buscar=$_POST['provincia'];
        }else{
            $buscar="?";
        }
    }else{
        $buscar="?";
    }

    if(isset($_POST['estado'])){
        $estado=intval($_POST['estado']);
    }else{
        $estado=1;
    }


    $por_pagina=10;
    $formula=($pagina - 1) * $por_pagina;
    $Mostrar=new Mostrar();
    $query=$Mostrar->mostrarviajes($buscar,$estado,$formula);
    while($row=pg_fetch_array($query)){
        ?>
            <tr>
                <td><?php echo $row['viajesid']; ?></td>
                <td><img src="../img/<?php echo $row['fotoviaje']; ?>" alt="" width="60px"></td>                   
                <td><?php echo $row['provinciasalida'] ?></td>
                <td><?php echo $row['provinciallegada'] ?></td>
                <td><?php echo $row['fechaviaje'] ?></td>
                <td><?php echo $row['costoviaje']?> $</td>
                <td><?php echo $row['placab']?></td>
                <td><?php echo $row['estadosid']?></td>
                <td ><button class="boton"><a href="adminVuelosedit.php"><box-icon type='solid' name='edit'></box-icon></a></button></td>
                <td><button class="boton" onclick="return desactivar()" ><a href="https://www.youtube.com/results?search_query=no+se+ejecuta+javascript+en+php">desactivar</a></button></td>
                    
            </tr>
        <?php
    }

}


?>