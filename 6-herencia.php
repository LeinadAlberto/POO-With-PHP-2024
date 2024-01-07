<?php 

    class Saiyajin {

        public string $clase = "Saiyajin";

        public function __construct(public string $nombre = "El saiyajin sin nombre", public int $nivel_pelea = 0) {

        }

        public function saludar($texto = "Hola soy ") {
            return $texto . $this->$nombre;
        }

        public function nivelPelea() {
            return $this->nombre . " tiene un nivel de pelea de " . $this->nivel_pelea . " y pertenece a la clase " . $this->clase;
        }
    }

    class SuperSaiyajin extends Saiyajin {

        public string $clase = "Super Saiyajin";

        public function transformacion() {
            if($this->nivel_pelea >= 1500) {
                $texto = $this->nombre . " se transformo en " . $this->clase;
            } else {
                $texto = $this->nombre . " no se transformo en " . $this->clase;
            }
            return $texto;
        }

    }

    $goku = new Saiyajin(nivel_pelea:1000, nombre:"Goku");
    echo "<br>";
    echo $goku->nivelPelea();

    $vegeta = new Saiyajin(nivel_pelea:1000, nombre:"Vegeta");
    echo "<br>";
    echo $vegeta->nivelPelea();
    
    echo "<br><br>";

    $gohan = new SuperSaiyajin(nivel_pelea:1600, nombre:"Gohan");
    echo "<br>";
    echo $gohan->nivelPelea();

    echo "<br>";
    echo $gohan->transformacion();



