window.addEventListener("load",carga);
function carga(){
    document.querySelectorAll("a")[0].addEventListener("click",mueve);
    document.querySelectorAll("a")[1].addEventListener("click",mueve);
}

function mueve(evento){
   if(evento.target.innerHTML=="&gt;"){
       location.href="completoFotos.php?pagina=mas";
   }else{
       location.href="completoFotos.php?pagina=menos";
   }
}


