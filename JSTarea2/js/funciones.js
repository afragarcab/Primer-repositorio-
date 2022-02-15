function iniciar() {
    var capa = document.getElementById("sucesos");
    var titulo = document.getElementById("titulo");
    var texto = document.getElementById("texto");

    if (capa.classList.contains("warning")) {
        titulo.innerHTML = "AVISO";
        texto.innerHTML = "Tenga cuidado"
    } else if (capa.classList.contains("error")) {
        titulo.innerHTML = "ERROR";
        texto.innerHTML = "Los datos son correctos";
    } else if (capa.classList.contains("sucess")) {
        titulo.innerHTML = "CORRECTO";
        texto.innerHTML = "Los datos son correctos";
    }
}

window.addEventListener("load",iniciar,false);