<?php
require_once "../../modelo/pagehome/validacion.php";
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
            echo "<script>alert( 'Te has registrado con exito.' );</script>";
            echo "<script>alert('Ha ocurrido un problema intentalo mas tarde.')</script>";
        }

    }else{
        echo "<script>alert('Verifique que los campos esten llenos correctamente.')</script>";
    }

    

}
?>