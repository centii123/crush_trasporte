<?php

require "../../modelo/gerente/actualizar.php";
$mas=new actualizar();
$cedula=$_GET['edit'];
$consulta=$mas->verpersonal($cedula);
$arr=pg_fetch_array($consulta);





if(isset($_POST['actualizar'])){
    
    $estado=intval($_POST['estado']);
    $cedulaa=$_POST['cedula'];
    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $role=intval($_POST['role']);
    $imagen=['png','jpg','jpeg'];
    if(isset($_FILES['foto'])){
        if(strlen($_FILES['foto']['name'])>=1){           
            $file=$_FILES['foto'];
            $filen=$file['name'];
            $filerute=$file['tmp_name'];
            $filecorte=explode('.',$filen);
            $filetipo= array_pop($filecorte);
            move_uploaded_file($filerute,"../../img/$filen");
            
        }else{
           
            $filen=$arr['imagenempleado'];
            $filecorte=explode('.',$filen);
            $filetipo= array_pop($filecorte);
        }
    }else{
        
        $filen=$arr['imagenempleado'];
        $filecorte=explode('.',$filen);
            $filetipo= array_pop($filecorte);
    }

    
    if(in_array($filetipo,$imagen)){
        
        $actualizar=new actualizar();
        $actualizarP=$actualizar->actualizarpersonal($cedulaa,$nombres,$apellidos,$estado,$filen,$role,$cedula);
        
            ?>
            <script>
            let espacio=document.querySelector('#espacioA')
            espacio.innerHTML= '<div class="alerta" id="alerta"><p><box-icon name="bell" type="solid" ></box-icon>se a actualizado con exito</p></div>'

            setTimeout(function(){
                let alerta=document.querySelector('#alerta')
                alerta.style.opacity= 0;
            },2000)
            setTimeout(()=>{
                location.href='adminpersonalgestionar.php';
            },1500)
            </script>
        <?php
        
        
    }else{
        ?>
            <script>
            let espacio=document.querySelector('#espacioA')
            espacio.innerHTML= '<div class="alertamal" id="alerta" style="background="red"><p><box-icon type="solid" name="shield-x"></box-icon>Se ha producido un error</p></div>'

            setTimeout(function(){
                let alerta=document.querySelector('#alerta')
                alerta.style.opacity= 0;
            },2000)
            </script>
    <?php
    }
    
}

?>

<form action="adminpersonaledit.php?edit=<?php echo $arr['cedulae']?>" method="post" enctype="multipart/form-data">
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
    <label for="nombre">Cedula</label>
    <input type="text" name="cedula" value="<?php echo $arr['cedulae'] ?>" minlength="10" maxlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" placeholder="cedula">  
    <label for="nombre">Nombres</label>
    <input type="text" name="nombres" id="nombre" placeholder="nombre" value="<?php echo $arr['nombres'] ?>" >
    <label for="apellido">Apellidos</label>
    <input type="text" name="apellidos" id="apellido" placeholder="apellido" value="<?php echo $arr['apellidos'] ?>">
    <label for="role">Rol</label>
    <select name="role" id="role" required>
        <option value="">--rol</option>
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
        include_once("../../modelo/gerente/Mostrar.php");
        $Mostrar= new Mostrar();
        echo $Mostrar->role();
        ?>
    </select>
    <label for="img">Foto del empleado <span class="letraform">*opcional</span></label>
    <input type="file" name="foto" id="img">  
  
    <button type="submit" name="actualizar">Actualizar</button>
</form>