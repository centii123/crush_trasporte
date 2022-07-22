<?php  
include_once('../admin_modelo/baseDatos.php');
$Mostrar=new Mostrar();
if(isset($_POST['boton'])){
    $estado=intval($_POST['estado']);
    $cedula=intval($_POST['cedula']);
    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $role=intval($_POST['role']);
    $imagen=['png','jpg'];
    $file=$_FILES['foto'];
    $filen=$file['name'];
    $filerute=$file['tmp_name'];
    $filecorte=explode('.',$file['name']);
    $filetipo= array_pop($filecorte);
    if(in_array($filetipo,$imagen)){
        move_uploaded_file($filerute,"../img/$filen");
        $conex= new Insertar();
        $ingresar= $conex->personalI($cedula,$nombres,$apellidos,$estado,$filen,$role)
        ?>
            <script>
            let espacio=document.querySelector('#espacioA')
            espacio.innerHTML= '<div class="alerta" id="alerta"><p><box-icon name="bell" type="solid" ></box-icon>se a registrado con exito</p></div>'

            setTimeout(function(){
                let alerta=document.querySelector('#alerta')
                alerta.style.opacity= 0;
            },2000)
            </script>
    <?php
    }else{
        ?>
            <script>
            let espacio=document.querySelector('#espacioA')
            espacio.innerHTML= '<div class="alerta" id="alerta" style="background="red"><p><box-icon name="bell" type="solid" ></box-icon>archivo no permitido</p></div>'

            setTimeout(function(){
                let alerta=document.querySelector('#alerta')
                alerta.style.opacity= 0;
            },2000)
            </script>
    <?php
    }
}

?>