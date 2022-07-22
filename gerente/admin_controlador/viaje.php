<?php  
include_once('../admin_modelo/baseDatos.php');
$Mostrar=new Mostrar();
if(isset($_POST['boton'])){
    ?>
    <script>
    let espacio=document.querySelector('#espacioA')
    espacio.innerHTML= '<div class="alertamal" id="alerta"><p><box-icon type="solid" name="shield-x"></box-icon>se a registrado con exito</p></div>'

    setTimeout(function(){
        let alerta=document.querySelector('#alerta')
        alerta.style.opacity= 0;
    },2000)
    </script>
    <?php
}
?>