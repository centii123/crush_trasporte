<?php
require "../admin_modelo/actualizar.php";
$actualizar=new actualizar();
if(isset($_GET['personal'])){
    $personal=$_GET['personal'];
    $estado=$_GET['estado'];
    if($estado=='1'){
        $estado=2;
    }else if($estado=='2'){
        $estado=1;
    }
    $acpersonal=$actualizar->estadopersonal($estado,$personal);
    header('location: ../admin_Vistas/adminpersonalgestionar.php');

}
if(isset($_GET['bus'])){
    $bus=$_GET['bus'];
    $estado=$_GET['estado'];
    if($estado=='1'){
        $estado=2;
    }else if($estado=='2'){
        $estado=1;
    }
    $acbus=$actualizar->estadobus($estado,$bus);
    header('location: ../admin_Vistas/adminbusgestionar.php');
}



?>