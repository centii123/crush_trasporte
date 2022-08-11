<?php
if(isset($_POST['cerrar'])){
    session_start();
    session_destroy();
    header('location:../vista/pagehome/inicio_sesion.php');
}
?>