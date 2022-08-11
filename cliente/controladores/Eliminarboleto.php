<?php
require_once "../modelo/eliminar.php";
$idboleto=$_GET['idboleto'];
$idpasajero=$_GET['idpasajero'];
$eliminar=new eliminar();
$consulta=$eliminar->eliminarboleto($idboleto,$idpasajero);
header('location:../vista/mis_viajes.php');
?>