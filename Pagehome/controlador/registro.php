<?php
require_once "../modelo/validacion.php";
if(isset($_POST['registrar'])){

    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $correo=$_POST['correo'];
    $contraseña=$_POST['contraseña'];
    $ConfirmarContra=$_POST['confirmar'];

    if($contraseña==$ConfirmarContra){
        
        $tipo=1;
        $registrar=new validacion;
        $validar=$registrar->Registro($tipo,$nombres,$apellidos,$correo,$contraseña);
        if($validar){
            echo "<script>alert( 'Registrado con exito' );</script>";
        }else{
            echo "<script>alert( 'Ah ocurrido un problema al registrar' );</script>";
        }

    }else{
        echo "<script>alert( 'Su contraseña no coincide' );</script>";
    }

    

}
?>