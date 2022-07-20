<?php  

if(isset($_POST['boton'])){
    ?>
    <script>
    let espacio=document.querySelector('#espacioA')
    espacio.innerHTML= '<div class="alerta" id="alerta"><p><box-icon name="bell" type="solid" ></box-icon>se a registrado con exito</p></div>'

    setTimeout(function(){
        let alerta=document.querySelector('#alerta')
        alerta.style.opacity= 0;
    },2000)
    </script>
    <?php
}
?>