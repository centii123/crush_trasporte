
let boton = document.querySelector('#boton')
boton.addEventListener('click',despliegue)
function despliegue(){
    let desplegable=document.querySelector('#desplegableusuario');
    desplegable.classList.toggle('activardesplegableusuario')
}
function eliminar(){
    let pregunta=confirm('¿Estas seguro que deseas Eliminar este viaje?');
    if(pregunta==true){
        return true;
    }else if(pregunta==false){
        return false;
    }
}






