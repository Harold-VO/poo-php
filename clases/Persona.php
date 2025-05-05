<?php

//Definir la clase Persona con sus propiedades
class Persona{
    public $nombre, $apellidoPaterno, $apellidoMaterno, $edad;

    //Metodo en clase Padre
    public function setApellido($apellidoPaterno, $apellidoMaterno){
        $this->apellidoPaterno = $apellidoPaterno;
        $this->apellidoMaterno = $apellidoMaterno;
    }

    public function getApellido(){
        return ucwords($this->apellidoPaterno . " ". $this->apellidoMaterno);
    }
}

//La clase Mexicano es una clase hija de la clase Persona, indicada por extends
class Mexicano extends Persona{
    //Sobre escribir atributos
    public $estado, $municipio;

    //Extiende el metodo setApellido de la clase padre, Persona
    public function setApellido($apellidoPaterno, $apellidoMaterno)
    {
        //La palabra reservada parent:: 
        parent::setApellido($apellidoPaterno, $apellidoMaterno);
        echo "Los apellidos de la clase Mexicano se extendieron con exito.";
    }

}

class Americano extends Persona{
     public $distrito;
}