<?php 

    // Definición de una Clase
    class Saiyajin {

        // Atributos
        public string $nombre = "Goku";
        public int $nivel_pelea = 1000;

        // Métodos
        public function Saludar():string {
            return "Hoy soy " . $this -> nombre;
        }

        public function NivelDePelea() {
            return $this -> nombre . " tiene un nivel de pelea de " . $this -> nivel_pelea;
        }

        public function saludar_2() {
            return "Hoy soy " . $this -> nombre . ", " . $this -> NivelDePelea(); 
        }

    }

    // Instancia de la Clase
    $goku = new Saiyajin();
    echo "<pre>";
    var_dump($goku);    /* Output: 
                            object(Saiyajin)#1 (2) {
                                ["nombre"]=>
                                string(4) "Goku"
                                ["nivel_pelea"]=>
                                int(1000)
                            } 
                        */
    echo "</pre>";

    // Forma de llamar un atributo de un Objeto
    echo $goku -> nombre; /* Output: Goku */

    echo "<br>"; // Salto de Línea

    // Forma de llamar un método de un Objeto
    echo $goku -> Saludar(); /* Output: Hoy soy Goku */

    echo "<br>";

    echo $goku -> NivelDePelea(); /* Output: Goku tiene un nivel de pelea de 1000 */

    echo "<br>";

    echo $goku -> saludar_2(); /* Output: Hoy soy Goku, Goku tiene un nivel de pelea de 1000 */

    $vegueta = new Saiyajin();