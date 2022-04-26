<?php
    //trim quita los espacios por delante y por detras
    $nombre = trim(
        htmlspecialchars(
            strip_tags($_REQUEST["nombre"]), ENT_QUOTES, "UTF-8"));

    if ($nombre != "") {
        print "El nombre es " . $_REQUEST["nombre"] . "\n";
    }

    if (isset($_REQUEST["opcion"])) {
        print "Opción Marcada " . "<br/>";
    }

    print_r($_REQUEST);
    print_r($_FILES);
   
?>