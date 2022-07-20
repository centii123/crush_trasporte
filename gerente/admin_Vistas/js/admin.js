function alerta(){
    let espacio=document.querySelector('#espacioA')
    espacio.innerHTML= '<div class="alerta" id="alerta"><p><box-icon name="bell" type="solid" ></box-icon>se a registrado con exito</p></div>'

    setTimeout(function(){
        let alerta=document.querySelector('#alerta')
        alerta.style.opacity= 0;
    },3000)
}


function desactivar(){
    let confirmar=confirm('¿Esta seguro que desea cambiar el estado a desactivado?')
    if(confirmar==true){
        return true
    }else{
        return false
    }
}
function activar(){
    let confirmar=confirm('¿Esta seguro que desea cambiar el estado a activado?')
    if(confirmar==true){
        return true
    }else{
        return false
    }
}

let boton = document.querySelector('#boton')
boton.addEventListener('click',despliegue)
function despliegue(){
    let desplegable=document.querySelector('#desplegableusuario');
    desplegable.classList.toggle('activardesplegableusuario')
}

//buscadores
if(document.querySelector('#cedula')){
    document.querySelector('#cedula').addEventListener('keyup',(e)=>{
        let valor=e.target.value;
        console.log(valor);
    })
}else if(document.querySelector('#provincias')){
    document.querySelector('#provincias').addEventListener('keyup',(a)=>{
        let valor2=a.target.value;
        console.log(valor2);
    })
}else if(document.querySelector('#placa')){
    document.querySelector('#placa').addEventListener('keyup',(a)=>{
        let valor2=a.target.value;
        console.log(valor2);
    })
}
    



    









