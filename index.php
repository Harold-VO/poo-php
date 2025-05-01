<?php
    //Importar la clase a utilizar
    require_once('clases/Persona.php');

    //Instanciar una clase (creacion de un objeto)
    $persona1 = new Persona("Pablo", "alimana", 29);
    $persona2 = new Persona("Karla", "VALERO", 32);

    /* //Acceder al objeto y asignar informacion
    $persona1->setNombre("jUAn");
    $persona1->apellido = "Pablo";
    $persona1->edad = 2;

    $persona2 = new Persona;
    
    $persona2->setNombre("beni");
    $persona2->apellido = "Suárez";
    $persona2->edad = 10; */

    echo "El nombre de la persona 1 es ".$persona1->getNombre();
    echo "<br>";
    echo "El nombre de la persona 2 es ".$persona2->getNombre();