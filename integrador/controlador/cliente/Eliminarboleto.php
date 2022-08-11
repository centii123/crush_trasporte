<?php
require_once "../../modelo/cliente/eliminar.php";
$idboleto=$_GET['idboleto'];
$idpasajero=$_GET['idpasajero'];
$eliminar=new eliminar();
$consulta=$eliminar->eliminarboleto($idboleto,$idpasajero);
header('location:../../vista/cliente/mis_viajes.php');
?>