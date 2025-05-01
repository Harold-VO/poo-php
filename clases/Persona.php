<?php

//Definir la clase Persona con sus propiedades
class Persona{
    public $nombre, $apellidoPaterno, $apellidoMaterno, $edad;

    //Metodo en clase Padre
    public function setApellido($apellidoPaterno, $apellidoMaterno){
        $this->apellidoPaterno = $apellidoPaterno;
        $this->apellidoMaterno = $apellidoMaterno;
    }
}

//La clase Mexicano es una clase hija de la clase Persona, indicada por extends
class Mexicano extends Persona{
    //Sobre escribir atributos
    public $estado, $municipio;

    //Sobre escribir metodos
    public function setApellido($apellidoPaterno, $apellidoMaterno)
    {
        //Se extiende el metodo, agregando un mensaje
        parent::setApellido($apellidoPaterno, $apellidoMaterno);
        echo "Los apellidos se extendieron con exito.";
    }

}

class Americano extends Persona{
     public $distrito;
}