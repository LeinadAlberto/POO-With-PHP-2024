<?php 

    // Definición de una Clase
    class Saiyajin {

        // Atributos
        public string $nombre;
        public int $nivel_pelea;

        // Método Constructor
        public function __construct($nombre, $nivel_pelea) {
            $this -> nombre = $nombre;
            $this -> nivel_pelea = $nivel_pelea;
        }

        // Métodos
        public function Saludar($texto = "Mi nombre es "):string {
            return $texto . $this -> nombre;
        }

        public function NivelDePelea() {
            return $this -> nombre . " tiene un nivel de pelea de " . $this -> nivel_pelea;
        }

        public function saludar_2() {
            return "Hoy soy " . $this -> nombre . ", " . $this -> NivelDePelea(); 
        }

    }

    // Instancia de la Clase
    $goku = new Saiyajin("Goku", 1000);
    echo $goku -> NivelDePelea();
    echo "<br>";
    echo $goku -> Saludar("Hola soy ");
    echo "<br>";
    echo $goku -> Saludar();

    echo "<br><br>";

    $vegueta = new Saiyajin("Vegueta", 950);
    echo $vegueta -> NivelDePelea();
    echo "<br>";
    echo $vegueta -> Saludar("Me llamo ");
    echo "<br>";
    echo $vegueta -> Saludar();
    

    
   