<?php

if(isset($_POST['boton'])){
    session_start();// inicia session 
    $_SESSION['datos']=[];// crea la session 
    $nombres= $_POST['nombres'];
    $apellidos= $_POST['apellidos'];
    $cedula= $_POST['cedula'];
    $Asiento= $_POST['Asiento'];
    $viaje=$_POST['viaje'];
    $_SESSION['datos']['nombre']=$nombres;// guardo datos 
    $_SESSION['datos']['apellidos']=$apellidos;
    $_SESSION['datos']['cedula']=$cedula;
    $_SESSION['datos']['Asiento']=$Asiento;
    $_SESSION['datos']['viaje']=$viaje;
    if(['cedula']<"10000000000"||['cedula']>"9000000000" ){
        PRINT "NUMERO NO VALIDO";
    }
    header('location:comprar.php');// envio session
    
}


?>