<?php

require "../admin_modelo/actualizar.php";
$mas=new actualizar();
$cedula=$_GET['edit'];
$consulta=$mas->verpersonal($cedula);
$arr=pg_fetch_array($consulta);
print_r($arr);
?>

<form action="adminpersonalagregar.php" method="post" enctype="multipart/form-data">
    <label for="estado">Estado</label>
    <select name="estado" id="estado" >
        <?php
        if($arr['estados']==1){
            ?>
            <option value="">--estado</option> 
            <option value="1" selected >Activo</option> <!--values es el valor que envias en php-->
            <option value="2">Inactivo</option>
            <?php
        }else if($arr['estados']==2){
            ?>
            <option value="">--estado</option> 
            <option value="1" >Activo</option> <!--values es el valor que envias en php-->
            <option value="2" selected>Inactivo</option>
            <?php
        }
        ?>
        
    </select>
    <label for="nombre">cedula</label>
    <input type="number" name="cedula" id="nombre" placeholder="nombre" value="<?php echo $arr['cedulae'] ?>" >
    <label for="nombre">nombres</label>
    <input type="text" name="nombres" id="nombre" placeholder="nombre" value="<?php echo $arr['nombres'] ?>" >
    <label for="apellido">apellidos</label>
    <input type="text" name="apellidos" id="apellido" placeholder="apellido" value="<?php echo $arr['apellidos'] ?>">
    <label for="role">role</label>
    <select name="role" id="role" required>
        <option value="">--role</option>
        <?php
        if($arr['rolesid']==1){
            ?>
                <option value="<?php echo $arr['rolesid'] ?>" selected >Conductor</option>
            <?php           
        }else if($arr['rolesid']==2){
            ?>
            <option value="<?php echo $arr['rolesid'] ?>" selected >Oficial</option>
            <?php  
        }

        ?>
         <option value="">--------------------------------------</option>
          <!--values es el valor que envias en php-->
        <?php
        include_once("../admin_modelo/Mostrar.php");
        $Mostrar= new Mostrar();
        echo $Mostrar->role();
        ?>
    </select>
    <label for="img">opcional: Foto del empleado</label>
    <input type="file" name="foto" id="img">   
    <button type="submit" name="boton">Registrar</button>
</form>