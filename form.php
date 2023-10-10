<?php

    $nombre= $_POST["txtnombre"]; // usamos un arreglo para almacenar  
    $edad= $_POST["txtedad"]; // usamos un arreglo para almacenar  
    $carrera= $_POST["txtcarrera"]; // usamos un arreglo para almacenar
    $cuenta= $_POST["txtnocuenta"]; // usamos un arreglo para almacenar
    echo "<p>Mi nombre es:" . $nombre."</p> ";
    echo "<p>Mi edad es:" . $edad."</p> ";
    echo "<p>Mi carrera es:" . $carrera."</p>";
    echo "<p>Mi numero de cuenta es:" . $cuenta."</p>";
    echo "<a href='index.php'>Al incio</a>";   
?>