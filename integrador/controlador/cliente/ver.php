<?php
require_once "../../modelo/cliente/funciones.php";
function verasiento(){
    $viajeid=$_GET['viajeid'];
    $ver=new ver();
    $asientosto=40;
    $verasiento= $ver->verAsientos($viajeid);
    $asientosoc=[];
    while($row=pg_fetch_array($verasiento)){
        array_push($asientosoc,$row['asiento']);
    }
    for ($i=1; $i <= $asientosto ; $i++) { 
        if(in_array($i,$asientosoc)){
            continue;
        }
        ?>
            <option value="<?php echo $i?>"><?php echo $i?></option>
        <?php
    }
}
?>