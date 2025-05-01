<?php

//Definir la clase Persona con sus propiedades
class Persona{
    public $nombre, $apellido, $edad;

    //Metodo constructor; suele usarse para darle valor a los atributos del objeto, es el primer metodo en ejecutarse y se llama automaticamente al crearlo
    public function __construct($nombre, $apellido, $edad)
    {
        $this->nombre = strtolower($nombre);
        $this->apellido = strtolower($apellido);
        $this->edad = ($edad);
    }

    /* public function setNombre($nombre){
        //Acceder al valor de una propiedad de una clase
        $this->nombre = strtolower($nombre);
    } */

    public function getNombre(){
        //Retornar el valor de una propiedad de una clase
        return ucwords($this->nombre);
    }

}

