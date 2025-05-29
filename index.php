<?php
    class Humano{
        /* Las propiedades estaticas son utiles para almacenar datos que no necesitan ser unicos para cada instancia como
            configuraciones, estados de la clase o constantes */
        public static $nombre = "Pedro";

        public function saludar(){
            echo "Hola desde funcion normal.";
        }

        /* Los metodos estaticos son utiles para crear o clonar objetos, realizar calculos o acceder a datos compartidos por
            todas las instancias */
        public static function saludarPersonalizado(){
            echo "Hola yo soy " . self::$nombre; //self:: permite acceder a la propiedad estatica de la clase
        }
    }

    class Persona extends Humano{
        public function saludoPersona(){
            echo "Hola desde Persona, yo tambien soy " . parent::$nombre; //parent:: permite acceder a la propiedad estatica de la clase padre
        }
    }

    $humano = new Humano;
    $humano->saludar();
    echo "<br>";

    Humano::saludarPersonalizado();
    echo "<br>";

    $persona = new Persona;
    $persona->saludoPersona();