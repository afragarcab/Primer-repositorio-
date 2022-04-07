function validar() {
    var correcto = true;
    var texto = "";

    var res = document.getElementById("resultado");
    res.innerHTML = "";

    var login = document.getElementById("login").value;
    var tel = document.getElementById("telefono").value;
    var web = document.getElementById("web").value;

    
    if (login == ""){
        texto += "El campo login no puede estar vacío, ";
        correcto = false;
    }else if (login > 5){
        texto += "El campo login tiene que tener minimo 5 caracteres";
        correcto = false;
    }

    if (tel == 0) {
        texto += "El campo telefono no puede estar vacío, ";
        correcto = false;
    }else if(!tel.startsWith("6") || tel.startsWith("9")){
        texto += "El campo telefono debe empezar por 6 o 9";
        correcto = false;
    }

    if (web == "") {
        texto += "El campo web no puede estar vacio";
        correcto = false;
    }else if (!web.startsWith("www") && web.endsWidth(".es")){
        texto += "El campo web debe empezar por www y terminar por .es, ";
    }

    res.innerHTML = texto;

    return correcto;
}

function magia(){
    var pc = document.getElementById("pccomponentes");
    var ama = document.getElementById("amazon");
    var cool = document.getElementById("coolmod");

    ama.style = "font-weight: bold";
    pc.style = "font-size: 50px";
    cool.style = "color: green";
}

function calcularPrecio(){
    var viaje = document.getElementById("viaje").value;
    var km = document.getElementById("km").value;
    var kmg = document.getElementById("kmg").value;

    var total = km * kmg;

    document.getElementById("resul").innerHTML = "El viaje desde " + viaje 
    + " de " + km + " kilómetros a " + kmg + " el precio de la gasolina por kilómetro hace un gasto total de " + total + "€";
 }