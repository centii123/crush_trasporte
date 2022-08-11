<?php
include('encabezado/encabezado_sesion.php');
include('../../controlador/pagehome/registro.php')
?>

<body>
    <section class="">
        <p class="texto">Integramos&nbsp;todo&nbsp;para&nbsp;que&nbsp;tus&nbsp;<br>viajes&nbsp;sean&nbsp;placenteros.<br><i class='bx bx-party'>Escoje&nbsp;ofertas.</i><br><i class='bx bxs-building-house'>Elige&nbsp;tú&nbsp;destino.</i><br><i class='bx bxs-credit-card'>Cancela&nbsp;el&nbsp;viaje&nbsp;de&nbsp;manera&nbsp;virtual.</i></p>
        <div class="izquierdo"><img src="img/log.jpg" width="130%" height="800px"></div>
        <div class="derecha"><br><br><br>
            <div class="testbox">
                <center><img class="imagen" src="img/lll.png" alt="" width="150px"><br>CRUSH Live Transport</center>

                <form action="Registro.php" method="POST">
                    <label id="icon" for="name"><i class='bx bxs-user-circle'></i></label>
                    <input type="text" name="nombres" id="name" placeholder="Nombres" required />
                    <label id="icon" for="name"><i class='bx bxs-user-account'></i></label>
                    <input type="text" name="apellidos" id="name" placeholder="Apellidos" required />
                    <label id="icon" for="name"><i class='bx bxl-firebase'></i></label>
                    <input type="text" name="correo" id="name" placeholder="Correo" required />
                    <label id="icon" for="name"><i class='bx bxs-low-vision'></i></label>
                    <input type="password" name="contraseña" id="name" placeholder="Contraseña" required style="
                    margin-bottom: 0px;"/>
                    <label id="icon" for="name"><i class='bx bxs-low-vision'></i></label>
                    <input type="password" name="confirmar" id="name" placeholder="Confirmar Contraseña" required />
                    <p><a href="Inicio_sesion.php">&nbsp;Regresar</a></p>
                    <p><a href="index.php">&nbsp;Volver al inicio</a></p>
                    <button type="submit" name='registrar' class="button" >Registrar</button><br>
                    
                    
                </form>


            </div>
        </div>
    </section>
</body>

</html>