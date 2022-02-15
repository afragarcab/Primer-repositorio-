function validar(input) {
    //var input = document.getElementById("nombre");
    //alert(input.value);

    if (input.value == null || input.value == "" || input.value.length == 0) {
        //input.style = "border: 2px solid red";
        //input.focus();
        mostrarError("spnombre", "Error: Nombre vacio")
    } else {
        //input.style = "";
        borrarError("spnombre");
    }
}
function mostrarError(nombreSpan, mensaje){
    document.getElementById(nombreSpan).innerHTML = mensaje;
}

function borrarError(nombreSpan){
    document.getElementById(nombreSpan).innerHTML = "";
}

function validarFormulario(){
    var cadenaError = "";

    var nombre = document.getElementById("nombre");
    if (nombre.value == null || nombre.value.length == 0){
        cadenaError = cadenaError + "<li>Error: nombre vacio</li>";
    }

    var postal = document.getElementById("postal");
    if (postal.value == null || postal.value.length == 0){
        cadenaError = cadenaError + "<li>Error: codigo postal vacio</li>";
    }else if (postal.value.length != 5){
        cadenaError = cadenaError + "<li>Error: codigo postal de 5 cifras</li>"
    }

    var tel = document.getElementById("telefono");
    if (tel.value == null || tel.value.length == 0){
        cadenaError = cadenaError + "<li>Error: telefono vacio</li>";
    }else if (tel.value.length != 5){
        cadenaError = cadenaError + "<li>Error: telefono de 9 cifras</li>"
    }else if(!tel.value.startwidth(9) && !tel.value.startwidth(6)){
        cadenaError = cadenaError + "<li>Error: telefono 9 o 6</li>"
    }

    if (cadenaError.length == 0){
        return true;
    }else {
        document.getElementById("capaerrores").style.visibility = "visible";
        mostrarError("sperrores", cadenaError);
        return false;
    }

    return true;
}
function mostrarEdad(campoEdad){
    document.getElementById("spedad").innerHTML = campoEdad.value;
}