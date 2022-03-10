//Calculadora del chino

var resultado = "";

function calcularSuma(){
    var num1 = parseInt(document.getElementById("numero1").value);
    var num2 = parseInt(document.getElementById("numero2").value);

    resultado = num1 + num2;

    document.getElementById("resultado").value = resultado;
}

function calcularResta(){
    var num1 = parseInt(document.getElementById("numero1").value);
    var num2 = parseInt(document.getElementById("numero2").value);

    resultado = num1 - num2;

    document.getElementById("resultado").value = resultado;
}

function calcularMultiplicar(){
    var num1 = parseInt(document.getElementById("numero1").value);
    var num2 = parseInt(document.getElementById("numero2").value);

    resultado = num1 * num2;

    document.getElementById("resultado").value = resultado;
}

function calcularDivision(){
    var num1 = parseInt(document.getElementById("numero1").value);
    var num2 = parseInt(document.getElementById("numero2").value);

    resultado = num1 / num2;

    document.getElementById("resultado").value = resultado;
}