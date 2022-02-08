function iniciar(){
/*var nombre = prompt("¿Quien eres?");
    if (nombre=="mine") {
        document.getElementById("container").className="mine";
    } else if(nombre=="tuyo") {
        document.getElementById("container").className="tuyo";
    }else if(nombre=="otro") {
        document.getElementById("container").className="otro";
    } */ 
    //Esto que está comentado es la primera tarea

    var correccion = prompt("Escribe error o correcto o aviso");
    if (correccion == correcto){
        document.getElementById("sucesos").className=""
    }
} 



window.addEventListener("load",iniciar,false);