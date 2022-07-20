<?php
include('encabezado/encabezado.php')
?>
<div class="contenedor">
    <div class="nav">
        <div class="navega">
            <div class="inicio" style="padding-left: 0px;"><a href="index.php">
                    <div class="espacii">
                        <box-icon type='solid' name='home'></box-icon>INICIO
                    </div>
                </a></div>
            <div class="inicio" style="padding-left: 0px;"><a href="catalogo.php">
                    <div class="espacii">
                        <box-icon type='solid' name='layout'></box-icon>CATALOGO
                    </div>
                </a></div>
           <div class="inicio" style="padding-left: 0px;"><a href="mis_viajes.php"><div class="espacii"><box-icon type='solid' name='briefcase-alt'></box-icon>MIS VIAJES</div></a></div> 

            <span class="espacioy">
                <p>
                    <box-icon type='solid' name='coupon'></box-icon>COMPRAR<img src="iconos/chevron-down.svg" alt="" id="imagen">
                </p>
            </span>
            <a href="datos.php" class="centrar">
                <box-icon type='solid' name='user-check'></box-icon>
                </box-icon>Paso 1
            </a>
            <a href="#" class="centrar activemas">
                <box-icon type='solid' name='credit-card-front'></box-icon>Paso 2
            </a>
        </div>
    </div>
        <div class="contenido">
            <div class="titulo">
                <h1>COMPRAR</h1>
            </div>
            <hr>
            <div class="center">
                <div class="registroadmin">
                    <div class="center">
                        <h3>COMPRAR CON TARGETA</h3>
                    </div>
                    <form action="" method="post">
                        <label for="cuenta">tipo de cuenta</label>
                        <select name="cuenta" id="cuenta">
                            <option value="">--pago--</option>
                            <!--values es el valor que envias en php-->
                        </select>
                        <label for="telefono"> telefono </label>
                        <input type="text" name="telefono" id="telefono" placeholder="telefono">
                        <label for="titular">Nombre del titular</label>
                        <input type="text" name="titular" id="titular" placeholder="Nombre del titular">
                        <label for="N_cuenta">Numero de cuenta</label>
                        <input type="number" name="N_cuenta" id="N_cuenta" placeholder="Numero de cuenta">
                        <label for="CVC">Codigo CVC</label>
                        <input type="number" name="CVC" id="CVC" placeholder="Codigo CVC">
                        <button type="submit"><a href="mis_viajes.php">Finalizar compra</a></button>
                    </form>
                </div>
            </div>
        </div>
</div>
<?php
include('pie/pie.php')
?>