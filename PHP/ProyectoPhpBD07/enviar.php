<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar.php</title>
</head>
<body>
<div class="container">
        <?php

            $nombre = trim(htmlspecialchars($_REQUEST["nombre"], ENT_QUOTES, "UTF-8"));
            $primerapellido = trim(htmlspecialchars($_REQUEST["primer_apellido"], ENT_QUOTES, "UTF-8"));
            $edad = trim(htmlspecialchars($_REQUEST["edad"], ENT_QUOTES, "UTF-8"));
            $dni = trim(htmlspecialchars($_REQUEST["dni"], ENT_QUOTES, "UTF-8"));
            $categoria = trim(htmlspecialchars($_REQUEST["categorias"], ENT_QUOTES, "UTF-8"));
            $ubicacion = trim(htmlspecialchars($_REQUEST["ubicacion"], ENT_QUOTES, "UTF-8"));

            $conexion = mysqli_connect("localhost", "root", "model3", "culturismophp") 
                            or die("Problemas de Conexión");
            
            $sql = "INSERT INTO competidor(nombre, primer_apellido, edad, dni, idcategoria, idubicacion ) 
                            VALUES ('$nombre','$primerapellido','$edad','$dni','$categoria','$ubicacion')";

            mysqli_query($conexion, $sql) 
                        or die("Problemas en el insert: ".mysqli_error($conexion));

            mysqli_close($conexion);
            echo '<script language="javascript">alert("Has dado de alta al Competidor");</script>';
            echo '<script language="javascript">window.location=\'insertar.php\'</script>';
        ?> 
    </div>
</body>
</html>