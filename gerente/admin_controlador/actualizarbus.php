<?php
require "../admin_modelo/actualizar.php";
$actualizar=new actualizar();
$idbus=$_GET['idbus'];
$verbuscon=$actualizar->verbus($idbus);
$verbusarray=pg_fetch_array($verbuscon);


if(isset($_POST['actualizar'])){
    
    $estado=$_POST['estado'];
    $placa=$_POST['placa'];
    $modelo=$_POST['modelo'];
    $asientos=intval($_POST['asientos']);
    $imagen=['png','jpg','jpeg'];
    if(isset($_FILES['foto'])){
        if(strlen($_FILES['foto']['name'])>=1){
            $file=$_FILES['foto'];
            $filen=$file['name'];
            $filerute=$file['tmp_name'];
            $filecorte=explode('.',$filen);
            $filetipo= array_pop($filecorte);
            move_uploaded_file($filerute,"../img/$filen");
            
        }else{
            
            $filen=$verbusarray['imagenbus'];
            $filecorte=explode('.',$filen);
            $filetipo= array_pop($filecorte);
        }
    }else{
        
        $filen=$verbusarray['imagenbus'];
        $filecorte=explode('.',$filen);
            $filetipo= array_pop($filecorte);
    }

    
    if(in_array($filetipo,$imagen)){
        
        
        $actualizarP=$actualizar->actualizarbus($placa,$modelo,$asientos,$filen,$estado,$idbus);
        
            ?>
            <script>
            let espacio=document.querySelector('#espacioA')
            espacio.innerHTML= '<div class="alerta" id="alerta"><p><box-icon name="bell" type="solid" ></box-icon>se a actualizado con exito</p></div>'

            setTimeout(function(){
                let alerta=document.querySelector('#alerta')
                alerta.style.opacity= 0;
            },2000)
            setTimeout(()=>{
                location.href='adminbusgestionar.php';
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
<form action="adminbusedit.php?idbus=<?php echo $_GET['idbus']; ?>" method="POST" enctype="multipart/form-data">
    <label for="estado">Estado</label>
    <select name="estado" id="estado" >
        <?php
        if($verbusarray['estado']==1){
            ?>
            <option value="">--estado</option> 
            <option value="1" selected >Activo</option> <!--values es el valor que envias en php-->
            <option value="2">Inactivo</option>
            <?php
        }else if($verbusarray['estado']==2){
            ?>
            <option value="">--estado</option> 
            <option value="1" >Activo</option> <!--values es el valor que envias en php-->
            <option value="2" selected>Inactivo</option>
            <?php
        }
        ?>
    </select>             
    <label for="placa">Placa</label>
    <input type="text" name="placa" id="placa" placeholder="placa" value="<?php echo $verbusarray['placab'] ?>" >
    <label for="modelo">Modelo</label>
    <input type="text" name="modelo" id="modelo" placeholder="modelo" value="<?php echo $verbusarray['modelo']  ?>" >
    <label for="asientos">Numero de asientos</label>
    <input type="number" name="asientos" id="asientos" placeholder="Numero de asientos" value="<?php echo intval($verbusarray['asientos']) ?>">
    <label for="img">Imagen del Bus <span class="letraform">*opcional</span> </label>
    <input type="file" name="foto" id="img" >
    <button type="submit" name="actualizar">Actualizar</button>
</form>