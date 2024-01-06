<?php 

    class Saiyajin {

        /*  Permite definir los atributos de la Clase dentro del constructor como parametros.
            Tambien se puede asignar valores por defecto a los atributos
            Tambien se puede definir el tipo de dato de cada atributo
            Sintaxis caracteristica de PHP 8
        */
        public function __construct(public string $nombre = "El saiyajin sin nombre", public int $nivel_pelea = 0) {

        }

        public function saludar($texto = "Hola soy ") {
            return $texto . $this->$nombre;
        }

        public function nivelPelea() {
            return $this->nombre . " tiene un nivel de pelea de " . $this->nivel_pelea;
        }

    }

    $goku = new Saiyajin(nivel_pelea:1000, nombre:"Goku");

    echo "<br>";

    echo $goku->nivelPelea();

    $vegeta = new Saiyajin();

    echo "<br>";

    echo $vegeta->nivelPelea();
