<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


    <style>

.espacio{
  font-weight: bold;
  
}

.elegir{
  font-weight: bold;
  font-size: 20px;
  color: green;

}


tr, td {
  
  padding: 20px;
}


</style>
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
style=" fill:#000000;"><path fill="#ffbca7" d="M13,26h-2.012C9.89,26,9,26.89,9,27.988l0,0c0,1.59,0.745,4.703,1.211,5.831 c0.539,1.306,0.848,2.12,1.453,2.651S13,37,13,37V26z"></path>
<path fill="#ffad93" d="M12.125,34c0,0-1.125,0-1.125-2c0-3.5-1-4-1-4s3-0.375,3,4C13,34,12.125,34,12.125,34z"></path><path fill="#ffbca7" d="M35,26h2.012C38.11,26,39,26.89,39,27.988l0,0c0,1.59-0.745,4.703-1.211,5.831 c-0.539,1.306-0.848,2.12-1.453,2.651S35,37,35,37V26z"></path><path fill="#ffad93" d="M35,32c0-4.375,3-4,3-4s-1,0.5-1,4c0,2-1.125,2-1.125,2S35,34,35,32z"></path><path fill="#ffdbd0" d="M24,17c-10.913,0-12,9-12,9s0,3,0,6s0.132,6,1.846,9c0.466,0.815,6.332,7,10.154,7 s9.688-6.185,10.154-7C35.868,38,36,35,36,32s0-6,0-6S34.913,17,24,17z"></path><rect width="2" height="7" x="30" y="30" fill="#ffbca7"></rect><g><path fill="#f5e9e8" d="M31,28c-3,0-4,2-4,2l1,1h2.423C33,31,34,30,34,29C34,29,33,28,31,28z"></path><circle cx="30.5" cy="29.5" r="1.5" fill="#bf360c"></circle><path fill="#212121" d="M27,30c0,0,0.875-1,6.125-1H34l0,0c0-1.105-0.895-2-2-2l0,0C28,27,27,30,27,30z"></path><polygon fill="#bdbdbd" points="33,26 27,30 26,30 29,26"></polygon></g><g><path fill="#f5e9e8" d="M17,28c3,0,4,2,4,2l-1,1h-2.423C15,31,14,30,14,29C14,29,15,28,17,28z"></path><circle cx="17.5" cy="29.5" r="1.5" fill="#212121"></circle><path fill="#212121" d="M21,30c0,0-0.875-1-6.125-1H14l0,0c0-1.105,0.895-2,2-2l0,0C20,27,21,30,21,30z"></path><polygon fill="#bdbdbd" points="15,26 21,30 22,30 19,26"></polygon></g><g><path fill="#455a64" d="M34,37c-4,0-7-5-10-5s-6,5-10,5h-1.616c0.262,1.333,0.7,2.667,1.462,4c0.466,0.815,6.332,7,10.154,7 s9.688-6.185,10.154-7c0.762-1.333,1.204-2.667,1.466-4H34z"></path><path fill="#37474f" d="M23,37v-3l-1,3c0,0,1,2,2,2s2-2,2-2H23z"></path></g><g><path fill="#113669" d="M11,17c-0.552,0-1,0.448-1,1v8c0,0.55,0.45,1,1,1h26c0.5,0,1-0.542,1-1v-8c0-0.552-0.448-1-1-1H11z"></path><path fill="#b2b2bc" d="M32,25H17c-0.552,0-1-0.448-1-1v-4c0-0.552,0.448-1,1-1h15c0.552,0,1,0.448,1,1v4 C33,24.552,32.552,25,32,25z"></path><path fill="#6c6c76" d="M27.621,20.379c-0.195-0.195-0.512-0.195-0.707,0l-0.371,0.371 c-0.322-0.297-0.837-0.625-1.543-0.625c-1.069,0-1.936,0.844-1.99,1.9l-0.908,1.188C21.855,23.535,22.085,24,22.491,24h2.384 c0.903,0,1.375-0.566,1.375-1.125c0-0.637-0.46-0.875-0.75-0.875c-0.276,0-0.5,0.224-0.5,0.5c0,0.079,0.022,0.151,0.055,0.218 c0.01,0.021,0.025,0.037,0.038,0.056c0.029,0.043,0.061,0.08,0.101,0.112c0.01,0.008,0.015,0.021,0.025,0.028 C25.17,22.954,25.063,23,24.875,23C24.327,23,24,22.673,24,22.125c0-0.551,0.449-1,1-1c0.695,0,1.076,0.594,1.089,0.616 c0.08,0.132,0.215,0.219,0.368,0.238c0.156,0.021,0.306-0.034,0.414-0.143l0.75-0.75C27.816,20.891,27.816,20.574,27.621,20.379z"></path></g><g><path fill="#e0e0e0" d="M11,17H7c0,0,1.125-1,3-1c-1.125-0.625-2.362-1.817-3-4c1.23,1.57,4,2,4,2s-2-2-2-7c0.5,2,3,4,3,4 s0-5.5,5-9c-1,3-1,5-1,5s4-6,12-7c-3.5,2-5,6-5,6s2-3,6-4c-0.625,1-1,2-1,2s4-3,9-4c-2,1.5-3,3-3,3s9-0.18,12-3c-1,5-3.5,10-6,12 c4.719-1.263,7-3,7-3s-2,4.375-7,6.98c1.25,0.77,4.999,1.02,4.999,1.02s-1.97,2-3.999,2h-1c0.875,1.25,2.999,2,2.999,2 s-2.902,0-4.902-2L39,20l1,4c-3.5-4-7-7-7-7s1,1,1,5.125C32,18.5,30,17,30,17s1,1.737,1,3c-0.5-1-4-3-4-3S19.874,17,11,17z"></path><path fill="#bdbdbd" d="M41,19c2.029,0,4-2,4-2s-2.298,1-5,1c-2.375,0-4-1-4-1c1.625,2,4,7,4,7s0-2.5-0.875-4 C41,21,43,21,43,21L41,19z"></path><path fill="#bdbdbd" d="M35,13c2.875-0.25,5-1,5-1c2.5-2,5-7,6-12C46,0,44,7,35,13z"></path><path fill="#bdbdbd" d="M37,15.5c1.25,0.5,3,0.5,3,0.5v-0.02C45,13.375,47,9,47,9S43,13.375,37,15.5z"></path><path fill="#bdbdbd" d="M24,17c-0.875-1.25-1-3-1-3s-0.875,0.75-1,2c-0.625-1.875-0.5-4-0.5-4s-0.875,0.75-1.5,2 c0-3.125,2-6,2-6s-3.5,1-5,4c0-5,3-8.876,3-8.876C17.339,5.005,16,7,16,7s-1.5,2-1.75,4c0,0-0.25-1-0.25-2c0-4,1-5.222,1-5.222 C12.012,7.1,12,11,12,11S9.5,9,9,7c0,5,2,7,2,7s-2.77-0.43-4-2c0.638,2.183,1.875,3.375,3,4c-1.875,0-3,1-3,1H24z"></path>
<path fill="#bdbdbd" d="M24,17c0,0,0.5-5.5,6-8.125c0,0-4,3.125-4,8.125"></path><polygon fill="#bdbdbd" points="11,27 12,32 13,27"></polygon><polygon fill="#bdbdbd" points="37,27 36,32 35,27"></polygon></g></svg>
<a href="consultarC.php" class="nav-link active"><h1>Consultar Datos con Join </h1></a>
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
                                  <a class="nav-link active" href="consultar.php">Consultar Datos</a>
                                </li>
                            </ul>
                      </div>
                  </div>
                </nav>
            </div>


            <table style="position: absolute; left: 500px; ">
              <form method="post" action="ConsultarC.php" enctype="multipart/form-data"> 
                  <tr>
                    <td><label for="elegir" class="elegir">ELIJE LA TABLA QUE QUIERES VER</label></td>
                  </tr>
                  <tr>

                      <td>
                      <select name="tablas" class="form-control" id="tablas">
                          <option>Elije tabla</option>
                          <option value="1">Tabla Competidores</option>
                          <option value="2">Tabla Localizacion del la Competición</option>
                      </select> 
                      </td>
                  </tr>
                  <tr>
                    
                    <td><input type="submit" value="Consultar Tabla" class="btn btn-primary btn-block"></td>

                  </tr>
              </form>
          </table>
          <!-- Primer código de if para las dos tablas -->
          <?php
              
            $solucion = $_REQUEST["tablas"];
            
            if ($solucion == 1) {
                $conexion = mysqli_connect("localhost", "root", "model3", "culturismophp") 
                            or die("Problemas de conexión");
            
            /* $sql = "SELECT  c.*, u.*, s.nombre_categoria
                    FROM competidor c join ubicacion_competicion u on u.idubicacion=c.idubicacion
                    join categorias s on s.idcategoria=c.idcategoria"; */

                $sql = "SELECT * FROM competidor";

            $registros = mysqli_query($conexion, $sql) 
                            or die("Problema en la consulta: " . mysqli_error($conexion));
            

            echo "<table class='table table-striped' style='position: absolute; top: 1060px;'>";
            echo "<thead><th>idcompetidor</th><th>nombre</th><th>primer_apellido</th><th>edad</th><th>dni</th><th>idubicacion</th> <th>idcategoria</th>
            </thead>";                        
            while ($reg=mysqli_fetch_array($registros)) {
                echo "<tr>";
                
                echo "<td>" . $reg['idcompetidor'] . "</td>";
                echo "<td>" . $reg['nombre'] . "</td>";
                echo "<td>" . $reg['primer_apellido'] . "</td>";
                echo "<td>" . $reg['edad'] . "</td>";
                echo "<td>" . $reg['dni'] . "</td>";
                echo "<td>" . $reg['idubicacion'] . "</td>";
                echo "<td>" . $reg['idcategoria'] . "</td>";
                
                echo "</tr>";
            }
            echo "</table>";

            mysqli_close($conexion);


            } else if ($solucion == 2) {
                $conexion = mysqli_connect("localhost", "root", "model3", "culturismophp") 
                            or die("Problemas de conexión");
            
            $sql = "SELECT * FROM ubicacion_competicion";

            $registros = mysqli_query($conexion, $sql) 
                            or die("Problema en la consulta: " . mysqli_error($conexion));
            
            echo "<table class='table table-striped' style='position: absolute; top: 1060px;'>";
            echo "<thead><th>idubicacion</th><th>pais</th><th>provincia</th><th>fecha</th>
            </thead>";                        
            while ($reg=mysqli_fetch_array($registros)) {
                echo "<tr>";
                
                echo "<td>" . $reg['idubicacion'] . "</td>";
                echo "<td>" . $reg['pais'] . "</td>";
                echo "<td>" . $reg['provincia'] . "</td>";
                echo "<td>" . $reg['fecha'] . "</td>";

                
                echo "</tr>";
            }

            echo "</table>";

            mysqli_close($conexion);
            }
            
          ?>

    <br/>
    <br/>
    <br/>


</div>
<!--Content ends-->

        
    



     
		

</body>
</html>