<?php
include('encabezado/encabezado_sesion.php');
include('../controlador/inicio_sesion.php');
?>

<body>
    <section class="">
        <p class="texto">
            Integramos&nbsp;todo&nbsp;para&nbsp;que&nbsp;tus&nbsp;<br>viajes&nbsp;sean&nbsp;placenteros.<br><i class='bx bx-party'>Escoje&nbsp;ofertas.</i><br><i class='bx bxs-building-house'>Elige&nbsp;tú&nbsp;destino.</i><br><i class='bx bxs-credit-card'>Cancela&nbsp;el&nbsp;viaje&nbsp;de&nbsp;manera&nbsp;virtual.</i></p>
        <div class="izquierdo"><img src="img/log.jpg" width="130%" height="800px"></div>
        <div class="derecha"><br><br><br>
            <div class="testbox">
            <center><img class="imagen" src="img/lll.png" alt="" width="150px"><br>CRUSH Live Transport</center>

                <form action="inicio_sesion.php" method="POST">
                    <hr>
                    <div class="accounttype">
                        <a href="#">Usuario</a>&nbsp;
                    </div>
                    <hr>
                    <label id="icon" for="name"><i class='bx bxs-user-circle'></i></label>
                    <input type="text" name="usuario" id="name" placeholder="Usuario" required />
                    <label id="icon" for="name"><i class='bx bxs-low-vision'></i></label>
                    <input type="password" name="contraseña" id="name" placeholder="Contraseña" required />
                    <p>¿Eres nuevo?<a href="Registro.php">&nbsp;Crear una cuenta</a>.<a
                            href="index.php">&nbsp;&nbsp;&nbsp;Volver al inicio</a></p>
                    <button type="submit" name='ingresar' class="button" >Ingresar</button><br>
                </form>
                <p class="condiciones">2022 Todos los derechos reservados. CRUSH es un producto de la empresa en Latam.
                    CRUSH</p>

            </div>
        </div>
    </section>
</body>

</html>
