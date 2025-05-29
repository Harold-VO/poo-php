<?php
    class Persona{
        public $nombre, $apellidoPaterno, $apellidoMaterno;

        public function setNombre($nombre){
            $this->nombre = $nombre;
            return $this;
        }

        public function setApellidos($apellidoPaterno, $apellidoMaterno){
            $this->apellidoPaterno = $apellidoPaterno;
            $this->apellidoMaterno = $apellidoMaterno;
            return $this;
        }

        public function imprimirDatos(){
            echo "Nombre: " . $this->nombre . "<br>";
            echo "Apellido Paterno: " . $this->apellidoPaterno . "<br>";
            echo "Apellido Materno: " . $this->apellidoMaterno . "<br>";
        }
    }

    $persona = new Persona;
    /* El patron de diseno Fluent Interface permite encadenar multiples llamadas a metodos en una sola expresion */
    $persona->setNombre("Hector")
            ->setApellidos("De"," Leon")
            ->imprimirDatos();