<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="icon" href="logo/logo24.jpg" >
    <link rel="stylesheet" href="css/style.css">
    <title>admin</title>
</head> 
<div class="navarriba">
          <a href="admin.php"><div class="logo"><img src="iconos/logo.png" alt="" width="110px" height="45px" style="margin-top:7px ;"><h3> CRUSH live transport</h3></div></a>
          <div class="usuario"><div><div id="boton"><p><b><?php echo $_SESSION['datosUs']['nombres']?> <?php echo $_SESSION['datosUs']['apellidos'] ?></b> </p> <img src="iconos/chevron-down.svg" alt="" width="20px" ></div> 
          <br>
              <form action="../controladores/cerrarsession.php" method="post" class="desplegableusuario" id="desplegableusuario">

                   <button type="submit" class="botonCerrarSesion" name="cerrarsession" ><box-icon name='exit' type='solid' ></box-icon> Cerrar session</button>
                  
              </form>
            
          </div><img src="iconos/usuario.png" alt="icon"></div>
</div>