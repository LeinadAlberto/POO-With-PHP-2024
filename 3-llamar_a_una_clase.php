<?php 

    require_once "2-metodo-constructor.php";

    echo "<br><br> ===== Instancia desde otro Archivo ===== <br><br>";
    // Instancia de la Clase
    $goku = new Saiyajin("Goku", 2000);
    echo $goku -> NivelDePelea();
    echo "<br>";
    echo $goku -> Saludar("Hola soy ");
    echo "<br>";
    echo $goku -> Saludar();