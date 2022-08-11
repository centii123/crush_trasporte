<?php
include_once "../../modelo/gerente/actualizar.php";
$idviaje=$_GET['viajesid'];
$consultaviajesmostrar=new actualizar();
$datos=[];
$viajesconsulta=$consultaviajesmostrar->mostrarviajes($idviaje);
while($row=pg_fetch_array($viajesconsulta)){
    $datos[]=[
        'cedulaem'=>$row['cedulaem'],
        'nombreem'=>$row['nombreem'],
        'apellidoem'=>$row['apellidosem'],
        'estadosid'=>$row['estadosid'],
        'estadoviajedes'=>$row['estadoviajedes'],
        'provinciasalida'=>$row['provinciasalida'],
        'salida'=>$row['salida'],
        'provinciallegada'=>$row['provinciallegada'],
        'llegada'=>$row['llegada'],
        'fechaviaje'=>$row['fechaviaje'],
        'placab'=>$row['placab'],
        'fotoviaje'=>$row['fotoviaje'],
        'costoviaje'=>$row['costoviaje'],

    ];
}
$choferid=$datos[1]['cedulaem'];
$oficialid=$datos[0]['cedulaem'];

if(isset($_POST['boton'])){
    $estado=$_POST['estado'];
    $provS=$_POST['provS'];
    $provLL=$_POST['provLL'];
    $costo=$_POST['costo'];
    $bus=$_POST['bus'];
    $fecha=$_POST['fecha'];   
    $chofer=$_POST['chofer'];
    $oficial=$_POST['oficial'];
    $imagen=['png','jpg','jpeg'];
    if(isset($_FILES['foto'])){
        if(strlen($_FILES['foto']['name'])>=1){           
            $file=$_FILES['foto'];
            $filen=$file['name'];
            $filerute=$file['tmp_name'];
            $filecorte=explode('.',$filen);
            $filetipo= array_pop($filecorte);
            move_uploaded_file($filerute,"../../img/$filen");
            
        }else{
           
            $filen=$datos[0]['fotoviaje'];
            $filecorte=explode('.',$filen);
            $filetipo= array_pop($filecorte);
        }
    }else{
        
        $filen=$datos[0]['fotoviaje'];
        $filecorte=explode('.',$filen);
            $filetipo= array_pop($filecorte);
    }

    if(in_array($filetipo,$imagen)){
        
        $actualizar=new actualizar();
        $actualizarV=$actualizar->actualizarviajes($idviaje,$filen,$fecha,$costo,$provS,$provLL,$bus,$estado,$choferid,$chofer,$oficialid,$oficial);
        
            ?>
            <script>
            let espacio=document.querySelector('#espacioA')
            espacio.innerHTML= '<div class="alerta" id="alerta"><p><box-icon name="bell" type="solid" ></box-icon>se a actualizado con exito</p></div>'

            setTimeout(function(){
                let alerta=document.querySelector('#alerta')
                alerta.style.opacity= 0;
            },2000)
            setTimeout(()=>{
                location.href='adminpersonalgestionar.php';
            },1500)
            </script>
        <?php
        
        
    }else{
        ?>
            <script>
            let espacio=document.querySelector('#espacioA')
            espacio.innerHTML= '<div class="alertamal" id="alerta" style="background="red"><p><box-icon type="solid" name="shield-x"></box-icon>Se ha producido un error</p></div>'

            setTimeout(function(){
                let alerta=document.querySelector('#alerta')
                alerta.style.opacity= 0;
            },2000)
            </script>
    <?php
    }
}


?>

<form action="adminViajesedit.php?viajesid=<?php echo $idviaje  ?>" method="post" enctype="multipart/form-data">
    <label for="estado">Estado</label>
    <select name="estado" id="estado" >
        <option value="">---estados</option> <!--values es el valor que envias en php-->
        <option value="<?php echo $datos[0]['estadosid']  ?>" selected><?php echo $datos[0]['estadoviajedes']  ?></option>
        <option value="">-----------------------------------------</option>
        <?php
         include_once("../../modelo/gerente/Mostrar.php");
         $Mostrar= new Mostrar();
            echo $Mostrar->estados();
        ?>
    </select>
    <label for="provS">Provincia de salida</label>
    <select name="provS" id="provS" >
        <option value="">--provincia--</option> 
        <option value="<?php echo $datos[0]['provinciasalida']  ?>" selected><?php echo $datos[0]['salida']  ?></option>
        <option value="">-----------------------------------------</option>
        <?php
        echo $Mostrar->mostrarProvincias();
        ?>
    </select>
    <label for="provLL">Provincia de llegada</label>
    <select name="provLL" id="provLL" >
        <option value="">--provincia--</option>
        <option value="<?php echo $datos[0]['provinciallegada']  ?>" selected><?php echo $datos[0]['llegada']  ?></option>
        <option value="">-----------------------------------------</option>
        <?php
        echo $Mostrar->mostrarProvincias();
        ?>
    </select>
    <label for="fecha">Fecha y hora del viaje</label>
    <input type="datetime-local" name="fecha" id="fecha" value="<?php echo $datos[0]['fechaviaje']  ?>" >
    
    <label for="costo">Costo del viaje</label>
    <input type="number" name="costo" id="costo" value="<?php echo $datos[0]['costoviaje']  ?>">
    <label for="bus">Bus</label>
    <select name="bus" id="bus" >
        <option value="">--bus</option>
        <option value="<?php echo $datos[0]['placab']  ?>" selected><?php echo $datos[0]['placab']  ?></option>
        <option value="">-----------------------------------------</option>
        <?php
            echo $Mostrar->bus()
        ?>
    </select>
    <label for="chofer">Chofer</label>
    <select name="chofer" id="chofer" >
        <option value="">--chofer</option>
        <option value="<?php echo $datos[0]['cedulaem']  ?>" selected><?php echo $datos[0]['nombreem']." ".$datos[0]['apellidoem']  ?></option>
        <option value="">-----------------------------------------</option>
        <?php
            echo $Mostrar->chofer()
        ?>
    </select>  
    <label for="oficial">Oficial</label>
    <select name="oficial" id="oficial" >
        <option value="">--oficial</option>
        <option value="<?php echo $datos[1]['cedulaem']  ?>" selected><?php echo $datos[1]['nombreem']." ".$datos[1]['apellidoem']  ?></option>
       
        <option value="">-----------------------------------------</option>
        <?php
            echo $Mostrar->oficial()
        ?>
    </select>                        
    <label for="img">Foto del viaje <span class="letraform">*opcional</span></label>
    <input type="file" name="foto" id="img">
    <button type="submit" name="boton">Registrarse</button>
</form>