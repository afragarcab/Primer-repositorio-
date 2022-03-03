var aleatorio = parseInt(Math.random() * 10) + 1;
var intentos = 3;

function comprobarNumero() {
    var num = parseInt(document.getElementById("numero").value);

    var resultado = "";
    if ( intentos > 0) {
        if (num > aleatorio) {
            intentos = intentos - 1;
            resultado = "Tu numero es mayor. Intentos restantes = " + intentos;
        }else if (num < aleatorio) {
            resultado = "Tu numero es menor. Intentos restantes = " + intentos;
        }else {
            resultado = "¡¡¡ Has acertado !!!"
        }
 
    }else {
        resultado = "Te has quedado sin intentos. Fin";
    }

    document.getElementById("resp2").innerHTML = resultado;
}

function calculoExponente() {
    var base = parseInt(document.getElementById("base").value);
    var exponente = parseInt(document.getElementById("exponente").value);

    var resultado = Math.pow(base, exponente);

    document.getElementById("resp").innerHTML = resultado
 }