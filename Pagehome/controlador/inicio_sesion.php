<?php

if(isset($_POST['ingresar'])){
        $usuario=$_POST ['usuario'];

        $contraseña=$_POST ['contraseña'];

        $conexion=new validacion;

        $comprobacion=$conexion->Inicio_sesion($usuario,$contraseña);

        if($comprobacion['correo']== $usuario && $comprobacion['contrasena'] == $contraseña && $comprobacion['tipo']==1)
        {

            header('location:https://www.google.com.mx/');

        }else if($comprobacion['correo']== $usuario && $comprobacion['contrasena'] == $contraseña && $comprobacion['tipo']==0)
        {

            header('location:https://www.youtube.com/');

        }else{
            echo 'usuario incorrecto';
        }
}

?>