<?php
    /*La herencia multiple no existe en PHP, para que una clase hija herede de varias clases se usan los trait.
        Nota: la precedencia de metodos o propiedades afecta la informacion que recupera la clase instanciada.*/
    class Persona{
        public $nombre, $apellido;

        public function setNombre($nombre, $apellido){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
        }

        public function getNombre(){
            return ucwords($this->nombre . " " . $this->apellido);
        }

        public function saludo(){
            echo "Hola desde clase Padre.";
        }
    }

    //La palabra reservada trait permite la creacion de estos mecanismos para agrupar funcionalidades en clases que no se pueden heredar
    trait Latino{
        public function saludo(){
            echo "Hola desde clase Latino";
        }
    }

    trait Europeo{
        public function saludo(){
            echo "Hola desde Europero";
        }

        //El encapsulamiento puede ser cambiado en la clase que usa el trait
        protected function pais(){
            echo "I'm German";
        }
    }

    class Humano extends Persona{
        //Para usar los trait se utiliza la palabra reservada use
        use Latino, Europeo{
            //El operador insteadOf permite elegir uno de los metodos con el mismo nombre de diferentes trait
            Latino::saludo insteadOf Europeo;
            //El operador as permite cambiar el encapsulamiento de un metodo
            pais as public;
        }

        public function setNombre($nombre, $apellido){
            parent::setNombre($nombre,$apellido);
        }
    }

    $persona = new Humano();
    $persona->setNombre("roberto","gomez");
    echo $persona->getNombre() . "<br>";
    $persona->saludo();
    echo "<br>";
    $persona->pais();