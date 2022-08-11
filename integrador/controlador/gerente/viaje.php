<?php  
include_once('../../modelo/gerente/Insertar.php');
$Mostrar=new Mostrar();
if(isset($_POST['boton'])){
    $estado=$_POST['estado'];
    $provS=$_POST['provS'];
    $provLL=$_POST['provLL'];
    $fecha=$_POST['fecha'];
    $costo=$_POST['costo'];
    $bus=$_POST['bus'];
    $chofer=$_POST['chofer'];
    $oficial=$_POST['oficial'];
    $imagen=['png','jpg'];
    $img=$_FILES['img'];
    $imgname=$img['name'];
    $imgruta=$img['tmp_name'];
    $imgseparado=explode('.',$imgname);
    $imgtipo=array_pop($imgseparado);
    
    if(in_array($imgtipo,$imagen)){
        
        move_uploaded_file($imgruta,"../../img/$imgname");

        $insertar=new Insertar();
        $viajeI=$insertar->viajeI($imgname,$fecha,$costo,$provS,$provLL,$bus,$estado,$chofer,$oficial);
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