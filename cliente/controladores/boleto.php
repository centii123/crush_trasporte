<?php
require "../modelo/insertar.php";
    $usuarioid=$_SESSION['datosUs']['usuarioid']; //session id usuario
    $nombre=$_SESSION['datos']['nombre'];// guardo datos 
    $apellidos= $_SESSION['datos']['apellidos'];
    $cedula=$_SESSION['datos']['cedula'];
    $Asiento=$_SESSION['datos']['Asiento'];
    $viaje=$_SESSION['datos']['viaje'];
    print_r($_SESSION['datos']);
    
if(isset($_POST['compra'])){

    $cuenta=$_POST['cuenta'];
    $titular=$_POST['titular'];
    $N_cuenta=$_POST['N_cuenta'];
    $CVC=$_POST['CVC'];
    $insertar=new insertar();
    $insetarcompra= $insertar->insertarCompra($cuenta,$titular,$cuenta,$CVC,$usuarioid,$viaje,$cedula,$nombre,$apellidos,$Asiento);
    ?>
    <script>
            let espacio=document.querySelector('#espacioA')
            espacio.innerHTML= '<div class="alerta" id="alerta"><p><box-icon name="message-square-check" type="solid" ></box-icon> gracias por tu compra</p></div>'

            setTimeout(function(){
                let alerta=document.querySelector('#alerta')
                alerta.style.opacity= 0;
            },2000)
            setTimeout(()=>{
                location.href='mis_viajes.php';
            },1500)
            </script>
    <?php
}
?>