function iniciar(){
var nombre = prompt("¿Quien eres?");
    if (nombre=="mine") {
        document.getElementById("container").className="mine";
    } else if(nombre=="tuyo") {
        document.getElementById("container").className="tuyo";
    }else if(nombre=="otro") {
        document.getElementById("container").className="otro";
    } 
} 

window.addEventListener("load",iniciar,false);