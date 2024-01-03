<?php 

    class Saiyajin {

        public $nombre;
        public $nivel_pelea;

        // Método Constructor con Named Parameters (Parámetros con nombre)
        public function __construct($nombre, $nivel) {
            $this -> nombre = $nombre;
            $this -> nivel_pelea = $nivel;
        }

        public function NivelDePelea() {
            return $this -> nombre . " tiene un nivel de pelea de " . $this -> nivel_pelea;
        }

    }

    // Ejemplo del uso de Named Parameters
    $goku = new Saiyajin(nivel:1000, nombre:"Goku");
    echo $goku -> NivelDePelea();