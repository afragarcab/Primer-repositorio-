<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<style>
    @import url(//fonts.googleapis.com/css?family=Lato:300:400);

body {
  margin:0;
}

h1 {
  font-family: 'Lato', sans-serif;
  font-weight:300;
  letter-spacing: 2px;
  font-size:48px;
}
p {
  font-family: 'Lato', sans-serif;
  letter-spacing: 1px;
  font-size:14px;
  color: #333333;
}

.header {
  position:relative;
  text-align:center;
  background: linear-gradient(60deg, rgba(84,58,183,1) 0%, rgba(0,172,193,1) 100%);
  color:white;
}
.logo {
  width:50px;
  fill:white;
  padding-right:15px;
  display:inline-block;
  vertical-align: middle;
}

.inner-header {
  height:65vh;
  width:100%;
  margin: 0;
  padding: 0;
}

.flex { /*Flexbox for containers*/
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.waves {
  position:relative;
  width: 100%;
  height:15vh;
  margin-bottom:-7px; /*Fix for safari gap*/
  min-height:100px;
  max-height:150px;
}

.content {
  position:relative;
  height:20vh;
  text-align:center;
  background-color: white;
}

/* Animation */

.parallax > use {
  animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
}
.parallax > use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 7s;
}
.parallax > use:nth-child(2) {
  animation-delay: -3s;
  animation-duration: 10s;
}
.parallax > use:nth-child(3) {
  animation-delay: -4s;
  animation-duration: 13s;
}
.parallax > use:nth-child(4) {
  animation-delay: -5s;
  animation-duration: 20s;
}
@keyframes move-forever {
  0% {
   transform: translate3d(-90px,0,0);
  }
  100% { 
    transform: translate3d(85px,0,0);
  }
}
/*Shrinking for mobile*/
@media (max-width: 768px) {
  .waves {
    height:40px;
    min-height:40px;
  }
  .content {
    height:30vh;
  }
  h1 {
    font-size:24px;
  }
}
</style> 

</head>
<body>
<!--Hey! This is the original version
of Simple CSS Waves-->

<div class="header">

<!--Content before waves-->
<div class="inner-header flex">
<!--Just the logo.. Don't mind this-->
<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="48" height="48"
viewBox="0 0 48 48"
style=" fill:#000000;"><polygon fill="#3dd9eb" points="15,1 14,9 5,8 8,18 1,23 8,28 2,32 8,36 7,41 24,38 41,41 40,37 46,30 41,28 47,19 39,18 44,10 34,10 33,2 24,6"></polygon><path fill="#fac8d5" d="M24,11c-6.1,0-11,5.4-11,13.2v9.5C13,41.6,17.9,47,24,47s11-5.4,11-13.2v-9.5C35,16.4,30.1,11,24,11 z"></path><path fill="#fa91ad" d="M24,34L24,34c-1.105,0-2-0.895-2-2v-6h4v6C26,33.105,25.105,34,24,34z"></path><path fill="#fafafa" d="M15.05,25C15.032,25.166,15,25.329,15,25.5c0,2.485,2.015,4.5,4.5,4.5s4.5-2.015,4.5-4.5 c0-0.171-0.981-0.334-1-0.5H15.05z"></path><path fill="#fafafa" d="M24.05,25C24.032,25.166,24,25.329,24,25.5c0,2.485,2.015,4.5,4.5,4.5s4.5-2.015,4.5-4.5 c0-0.171-0.032-0.334-0.05-0.5H24.05z"></path><circle cx="28.503" cy="26.497" r="1.503" fill="#6c19ff"></circle><path fill="#fa91ad" d="M30.027,39.924C30,39.915,27.196,39,24,39s-6,0.915-6.027,0.924l-0.947-2.847 C17.158,37.033,20.299,36,24,36s6.842,1.033,6.974,1.077L30.027,39.924z"></path><circle cx="19.503" cy="26.503" r="1.497" fill="#6c19ff"></circle><path fill="#fa91ad" d="M15.05,26C15.032,25.834,15,25.671,15,25.5c0-2.485,2.015-4.5,4.5-4.5s4.5,2.015,4.5,4.5 c0,0.171,1.019,0.334,1,0.5H15.05z"></path><path fill="#fa91ad" d="M24.05,26C24.032,25.834,24,25.671,24,25.5c0-2.485,2.015-4.5,4.5-4.5s4.5,2.015,4.5,4.5 c0,0.171-0.032,0.334-0.05,0.5H24.05z"></path>
<rect width="18" height="3" x="15" y="19" fill="#6c19ff"></rect><circle cx="13" cy="34" r="3" fill="#fac8d5"></circle><circle cx="35" cy="34" r="3" fill="#fac8d5"></circle>
<path fill="#fa91ad" d="M32,34c0,1.555,1.187,2.819,2.703,2.97C34.89,35.965,35,34.91,35,33.8V31 C33.343,31,32,32.343,32,34z"></path>
<path fill="#fa91ad" d="M13.31,36.969C14.819,36.812,16,35.551,16,34c0-1.657-1.343-3-3-3v2.7 C13,34.848,13.115,35.935,13.31,36.969z"></path></svg>
<h1>Consultar Datos</h1>
</div>

<!--Waves Container-->
<div>
<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
<defs>
<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
</defs>
<g class="parallax">
<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
</g>
</svg>
</div>
<!--Waves end-->

</div>
<!--Header ends-->

<!--Content starts RECUERDA TODO LA INFORMACION QUE HAGAS AQUIIIIIIIIIIIIII-->
      
          <div class="content flex">
                <nav class="navbar navbar-expand-lg" id="">
                  <div class="container-fluid">
                        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      <div class="collapse navbar-collapse" id="navbarText">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                  <a class="nav-link active" aria-current="page" href="index.html">BIENVENIDOS A MI WEB</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link active" href="insertar.php">Insertar</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link active" href="consultarC.php">Consultar con Condiciones</a>
                                </li>
                            </ul>
                      </div>
                  </div>
                </nav>
            </div>

            <h2>CONSULTAR TODOS LOS DATOS</h2>

        <?php
            $conexion = mysqli_connect("localhost", "root", "model3", "culturismophp") 
                            or die("Problemas de conexión");
            
            $sql = "SELECT  c.*, u.*, s.nombre_categoria
                    FROM competidor c join ubicacion_competicion u on u.idubicacion=c.idubicacion
                    join categorias s on s.idcategoria=c.idcategoria";

            $registros = mysqli_query($conexion, $sql) 
                            or die("Problema en la consulta: " . mysqli_error($conexion));
            
            echo "<table class='table table-striped'>";
            echo "<thead><th>idcompetidor</th><th>nombre</th><th>primer_apellido</th><th>edad</th><th>dni</th><th>idubicacion</th>
            <th>pais</th><th>provincia</th><th>fecha</th><th>nombre_categoria</th></thead>";                        
            while ($reg=mysqli_fetch_array($registros)) {
                echo "<tr>";
                
                echo "<td>" . $reg['idcompetidor'] . "</td>";
                echo "<td>" . $reg['nombre'] . "</td>";
                echo "<td>" . $reg['primer_apellido'] . "</td>";
                echo "<td>" . $reg['edad'] . "</td>";
                echo "<td>" . $reg['dni'] . "</td>";
                echo "<td>" . $reg['idubicacion'] . "</td>";
                echo "<td>" . $reg['pais'] . "</td>";
                echo "<td>" . $reg['provincia'] . "</td>";
                echo "<td>" . $reg['fecha'] . "</td>";
                echo "<td>" . $reg['nombre_categoria'] . "</td>";
                /* echo "<td>" . "<a href='actualizar.php?idAlumno=$reg[idAlumno]' class='btn btn-primary btn-sm'>Actualizar</a>
                               <a href='borrar.php?idAlumno=$reg[idAlumno]' class='btn btn-danger btn-sm'>Borrar</a>" . "</td>"; */

                
                echo "</tr>";
            }

            echo "</table>";

            mysqli_close($conexion);
        ?>
    </div>
          


</div>
<!--Content ends-->

        
    



     
		

</body>
</html>