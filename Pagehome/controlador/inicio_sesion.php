<?php
require_once "../modelo/validacion.php";
if(isset($_POST['ingresar'])){
        $usuario=$_POST ['usuario'];

        $contraseña=$_POST ['contraseña'];

        $conexion=new validacion;

        $comprobacion=$conexion->Inicio_sesion($usuario,$contraseña);
        


        if(!$comprobacion){
            echo "<script>alert( 'Revise que su usuario y contraseña sean correctos' );</script>";
        }else if($comprobacion['correo']== $usuario && $comprobacion['contrasena'] == $contraseña && $comprobacion['tipo']==1){

            session_start();
            $_SESSION['datosUs']=[];
            $_SESSION['datosUs']['usuarioid']=$comprobacion['usuarioid'];
            $_SESSION['datosUs']['nombres']=$comprobacion['nombres'];
            $_SESSION['datosUs']['apellidos']=$comprobacion['apellidos'];
            print_r($_SESSION['datosUs']);
            header('location:../../cliente/vista/index.php');

        }else if($comprobacion['correo']== $usuario && $comprobacion['contrasena'] == $contraseña && $comprobacion['tipo']==0)
        {
            //print_r($comprobacion);
            session_start();
            $_SESSION['datos']=[];
            $_SESSION['datos']['usuarioid']=$comprobacion['usuarioid'];
            $_SESSION['datos']['nombres']=$comprobacion['nombres'];
            $_SESSION['datos']['apellidos']=$comprobacion['apellidos'];
            print_r($_SESSION['datos']);
            
            header('location:../../gerente/admin_Vistas/admin.php');

        }
}

?>