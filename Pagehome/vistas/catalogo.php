<?php
include('encabezado/encabezado.php');
require '../controlador/catalogo.php';
?>

 <!--slider de aviones-->
 <div class="box">
        <div class="content-all">
            <div class="content-carrousel">
                <figure><img src="imgcl/img1.jfif"></figure>
                <figure><img src="imgcl/img2.jfif"></figure>
                <figure><img src="imgcl/img3.jfif"></figure>
                <figure><img src="imgcl/img4.jfif"></figure>
                <figure><img src="imgcl/img5.jfif"></figure>
                <figure><img src="imgcl/img6.jpg"></figure>
                <figure><img src="imgcl/img7.jpg"></figure>
                <figure><img src="imgcl/img8.jfif"></figure>
                <figure><img src="imgcl/img9.jfif"></figure>
                <figure><img src="imgcl/img10.webp"></figure>
            </div>
        </div>
    </div><br><br><br><br><br><br><br><br><br><br><br>
    <!--contenido-->
    <h2 class="destino">Catalogo de viajes terrestres</h2><br>
    <section class="cuadro">
        <?php
        echo catalogo();
        ?>
    </section>

    </div><br><br>
    <div>
        <h2 class="lugar2">Buscar viajes baratos por destino</h2>
        <p class="lugar">Encuentra viaje terrestre</p>
        <p class="lugar">Ahorra dinero en boletes de transporte terrestre, buscan boletos de transporte terrestre
            baratos en CRUSH. CRUSH busca
            ofertas de viajes
            en cientos de sitios web de boletos de transporte para ayudarte a encontrar los transportes más baratos. Ya
            sea que
            estés buscando un viaje de última hora o un boleto de ruta barato para una fecha posterior, puedes
            encontrar las mejores ofertas más rápido en CRUSH.</p>
    </div><br>
    <div class="publicidad">
        <hr>
        <img src="img/publividad.jpg" width="900px" height="230px">
        <hr>
    </div><br><br>

    <!--Fin del contenido-->

    <?php
include('pie_de_pagina/pie.php')
?>