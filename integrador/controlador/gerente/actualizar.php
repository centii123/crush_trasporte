<?php
require "../../modelo/gerente/actualizar.php";
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
    header('location: ../../vista/gerente/adminpersonalgestionar.php');

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
    header('location: ../../vista/gerente/adminbusgestionar.php');
}



?>