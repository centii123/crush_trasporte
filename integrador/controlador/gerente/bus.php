<?php  
include_once('../../modelo/gerente/Insertar.php');

if(isset($_POST['boton'])){
    $estado=$_POST['estado'];
    $placa=$_POST['placa'];
    $modelo=$_POST['modelo'];
    $asientos=$_POST['asientos'];
    $imagen=['png','jpg'];
    $file=$_FILES['img'];
    $filen=$file['name'];
    $filerute=$file['tmp_name'];
    $filecorte=explode('.',$file['name']);
    $filetipo= array_pop($filecorte);
    if(in_array($filetipo,$imagen)){
        move_uploaded_file($filerute,"../../img/$filen");
        $conex= new Insertar();
        $ingresar= $conex->busI($placa,$modelo,$asientos,$filen,$estado);
        
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


