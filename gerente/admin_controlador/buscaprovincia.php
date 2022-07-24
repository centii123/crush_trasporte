<?php
include_once('../admin_modelo/buscadores.php');
$pagina=1;

$por_pagina=10;
$formula=($pagina - 1) * $por_pagina;
$Mostrar=new buscador();
$query=$Mostrar->mostrarviajes($formula);
?>